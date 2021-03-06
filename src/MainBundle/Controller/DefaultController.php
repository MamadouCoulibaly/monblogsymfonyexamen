<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use MainBundle\Entity\Comment;


class DefaultController extends Controller
{
    /**
     * This is the homepage of your blog
     *
     * @Route("/")
     * @Route("/category/{categoryCode}")
     * @Template()
     */
    public function indexAction($categoryCode = null)
    {
        if ($categoryCode != null) {
            $doctrineObject     = $this->getDoctrine();
            $categoryRepository = $doctrineObject->getRepository('MainBundle:Category');
            $postRepository     = $doctrineObject->getRepository('MainBundle:Post');

            $category   = $categoryRepository->findOneByCode($categoryCode);
            $posts      = $postRepository->findByCategory($category);
        } else {
            $repository = $this->getDoctrine()->getRepository('MainBundle:Post');
            $posts = $repository->findAll();
        }

    	return [
            'posts' => $posts
        ];
    }

    /**
     * This is the post page
     *
     * @Route("/post/{postCode}")
     * @Template()
     */
    public function postAction(Request $request, $postCode)
    {
        $postRepository = $this->getDoctrine()->getRepository('MainBundle:Post');
        $post = $postRepository->findOneByCode($postCode);

        // Comment form to submit to Post
        $comment = new Comment();
        $form = $this->getPostCommentForm($comment);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $comment->setPost($post);
            $comment->setHashId(md5(date('ymdHis')));
            $em->persist($comment);
            $em->flush($comment);

            $this->addFlash('success', 'Your comment was sent!');
            return $this->redirectToRoute('main_default_post', ['postCode' => $postCode]);

        }

        // Get all comments
        $commentRepository = $this->getDoctrine()->getRepository('MainBundle:Comment');
        $comments = $commentRepository->findByPost($post);

        return [
            'post'      => $post,
            'form'      => $form->createView(),
            'comments'  => $comments
        ];
    }

    /**
     * Categories div
     *
     * @Template()
     */
    public function categoriesAction() {
        $repository = $this->getDoctrine()->getRepository('MainBundle:Category');
        $categories = $repository->findAll();

        return [
            'categories' => $categories
        ];
    }

    /**
     * Categories div
     *
     * @Template()
     * @Route("/search")
     */
    public function searchAction(Request $request) {

        $form = $this->createFormBuilder()
            ->setAction($this->generateUrl('main_default_search'))
            ->add('search', TextType::class)
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $posts = $this->getDoctrine()->getRepository('MainBundle:Post')->createQueryBuilder('o')
               ->where('o.title LIKE :title')
               ->setParameter('title', "%{$data['search']}%")
               ->getQuery()
               ->getResult();

            return $this->render('MainBundle:Default:index.html.twig', ['posts' => $posts]);
        }

        return ['form' => $form->createView()];
    }

    public function getPostCommentForm($comment){
        $form = $this->createForm('MainBundle\Form\CommentType', $comment);
        $form->remove('createdAt');
        $form->remove('approved');
        $form->remove('response');
        $form->remove('post');

        return $form;
    }
}
