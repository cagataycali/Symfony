<?php

namespace CagatayBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use CagatayBundle\Entity\Kategori;
use CagatayBundle\Form\KategoriType;

/**
 * Kategori controller.
 *
 */
class KategoriController extends Controller
{

    /**
     * Lists all Kategori entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CagatayBundle:Kategori')->findAll();

        return $this->render('CagatayBundle:Kategori:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Kategori entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Kategori();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('kategori_show', array('id' => $entity->getId())));
        }

        return $this->render('CagatayBundle:Kategori:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Kategori entity.
     *
     * @param Kategori $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Kategori $entity)
    {
        $form = $this->createForm(new KategoriType(), $entity, array(
            'action' => $this->generateUrl('kategori_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Kategori entity.
     *
     */
    public function newAction()
    {
        $entity = new Kategori();
        $form   = $this->createCreateForm($entity);

        return $this->render('CagatayBundle:Kategori:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Kategori entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Kategori')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kategori entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CagatayBundle:Kategori:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Kategori entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Kategori')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kategori entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CagatayBundle:Kategori:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Kategori entity.
    *
    * @param Kategori $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Kategori $entity)
    {
        $form = $this->createForm(new KategoriType(), $entity, array(
            'action' => $this->generateUrl('kategori_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Kategori entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CagatayBundle:Kategori')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Kategori entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('kategori_edit', array('id' => $id)));
        }

        return $this->render('CagatayBundle:Kategori:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Kategori entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CagatayBundle:Kategori')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Kategori entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('kategori'));
    }

    /**
     * Creates a form to delete a Kategori entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('kategori_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
