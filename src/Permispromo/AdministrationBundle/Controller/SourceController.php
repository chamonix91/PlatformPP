<?php

namespace Permispromo\AdministrationBundle\Controller;

use Permispromo\AdministrationBundle\Entity\Source;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Source controller.
 *
 */
class SourceController extends Controller
{
    /**
     * Lists all source entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $sources = $em->getRepository('PermispromoAdministrationBundle:Source')->findAll();

        return $this->render('@PermispromoAdministration/Source/index.html.twig', array(
            'sources' => $sources,
        ));
    }

    /**
     * Creates a new source entity.
     *
     */
    public function newAction(Request $request)
    {
        $source = new Source();
        $form = $this->createForm('Permispromo\AdministrationBundle\Form\SourceType', $source);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($source);
            $em->flush();

            return $this->redirectToRoute('source_show', array('id' => $source->getId()));
        }

        return $this->render('@PermispromoAdministration/Source/new.html.twig', array(
            'source' => $source,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a source entity.
     *
     */
    public function showAction(Source $source)
    {
        $deleteForm = $this->createDeleteForm($source);

        return $this->render('@PermispromoAdministration/Source/show.html.twig', array(
            'source' => $source,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing source entity.
     *
     */
    public function editAction(Request $request, Source $source)
    {
        $deleteForm = $this->createDeleteForm($source);
        $editForm = $this->createForm('Permispromo\AdministrationBundle\Form\SourceType', $source);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('source_edit', array('id' => $source->getId()));
        }

        return $this->render('@PermispromoAdministration/Source/edit.html.twig', array(
            'source' => $source,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a source entity.
     *
     */
    public function deleteAction(Request $request, Source $source)
    {
        $form = $this->createDeleteForm($source);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($source);
            $em->flush();
        }

        return $this->redirectToRoute('source_index');
    }

    /**
     * Creates a form to delete a source entity.
     *
     * @param Source $source The source entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Source $source)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('source_delete', array('id' => $source->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
