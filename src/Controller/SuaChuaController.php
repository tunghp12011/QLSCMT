<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SuaChua Controller
 *
 */
class SuaChuaController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SuaChua->find();
        $suaChua = $this->paginate($query);

        $this->set(compact('suaChua'));
    }

    /**
     * View method
     *
     * @param string|null $id Sua Chua id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suaChua = $this->SuaChua->get($id, contain: []);
        $this->set(compact('suaChua'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suaChua = $this->SuaChua->newEmptyEntity();
        if ($this->request->is('post')) {
            $suaChua = $this->SuaChua->patchEntity($suaChua, $this->request->getData());
            if ($this->SuaChua->save($suaChua)) {
                $this->Flash->success(__('The sua chua has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sua chua could not be saved. Please, try again.'));
        }
        $this->set(compact('suaChua'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sua Chua id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suaChua = $this->SuaChua->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suaChua = $this->SuaChua->patchEntity($suaChua, $this->request->getData());
            if ($this->SuaChua->save($suaChua)) {
                $this->Flash->success(__('The sua chua has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sua chua could not be saved. Please, try again.'));
        }
        $this->set(compact('suaChua'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sua Chua id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suaChua = $this->SuaChua->get($id);
        if ($this->SuaChua->delete($suaChua)) {
            $this->Flash->success(__('The sua chua has been deleted.'));
        } else {
            $this->Flash->error(__('The sua chua could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
