<?php

namespace CagatayBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CagatayBundle\Entity\Yazi;
use CagatayBundle\Form\YaziType;

/**
 * Yazi controller.
 *
 */
class YaziController extends Controller
{

    /**
     * Lists all Yazi entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CagatayBundle:Yazi')->findAll();

        return $this->render('CagatayBundle:Yazi:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Yazi entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Yazi();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('yazi_show', array('id' => $entity->getId())));
        }

        return $this->render('CagatayBundle:Yazi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Yazi entity.
     *
     * @param Yazi $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Yazi $entity)
    {
        $form = $this->createForm(new YaziType(), $entity, array(
            'action' => $this->generateUrl('yazi_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Yazi entity.
     *
     */
    public function yeniAction()
    {
        $entity = new Yazi();
        $form   = $this->createCreateForm($entity);

        return $this->render('CagatayBundle:Yazi:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Yazi entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Yazi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Yazi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CagatayBundle:Yazi:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Yazi entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Yazi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Yazi entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CagatayBundle:Yazi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Yazi entity.
    *
    * @param Yazi $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Yazi $entity)
    {
        $form = $this->createForm(new YaziType(), $entity, array(
            'action' => $this->generateUrl('yazi_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Yazi entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Yazi')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Yazi entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('yazi_edit', array('id' => $id)));
        }

        return $this->render('CagatayBundle:Yazi:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Yazi entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CagatayBundle:Yazi')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Yazi entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('yazi'));
    }

    /**
     * Creates a form to delete a Yazi entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('yazi_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
