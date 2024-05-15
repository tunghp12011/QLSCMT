<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Maytinh Controller
 *
 */
class MaytinhController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Maytinh->find();
        $maytinh = $this->paginate($query);

        $this->set(compact('maytinh'));
    }

    /**
     * View method
     *
     * @param string|null $id Maytinh id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $maytinh = $this->Maytinh->get($id, contain: []);
        $this->set(compact('maytinh'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $maytinh = $this->Maytinh->newEmptyEntity();
        if ($this->request->is('post')) {
            $maytinh = $this->Maytinh->patchEntity($maytinh, $this->request->getData());
            if ($this->Maytinh->save($maytinh)) {
                $this->Flash->success(__('The maytinh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maytinh could not be saved. Please, try again.'));
        }
        $this->set(compact('maytinh'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Maytinh id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $maytinh = $this->Maytinh->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $maytinh = $this->Maytinh->patchEntity($maytinh, $this->request->getData());
            if ($this->Maytinh->save($maytinh)) {
                $this->Flash->success(__('The maytinh has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The maytinh could not be saved. Please, try again.'));
        }
        $this->set(compact('maytinh'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Maytinh id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $maytinh = $this->Maytinh->get($id);
        if ($this->Maytinh->delete($maytinh)) {
            $this->Flash->success(__('The maytinh has been deleted.'));
        } else {
            $this->Flash->error(__('The maytinh could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
