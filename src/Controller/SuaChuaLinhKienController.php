<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * SuaChuaLinhKien Controller
 *
 */
class SuaChuaLinhKienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->SuaChuaLinhKien->find();
        $suaChuaLinhKien = $this->paginate($query);

        $this->set(compact('suaChuaLinhKien'));
    }

    /**
     * View method
     *
     * @param string|null $id Sua Chua Linh Kien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $suaChuaLinhKien = $this->SuaChuaLinhKien->get($id, contain: []);
        $this->set(compact('suaChuaLinhKien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $suaChuaLinhKien = $this->SuaChuaLinhKien->newEmptyEntity();
        if ($this->request->is('post')) {
            $suaChuaLinhKien = $this->SuaChuaLinhKien->patchEntity($suaChuaLinhKien, $this->request->getData());
            if ($this->SuaChuaLinhKien->save($suaChuaLinhKien)) {
                $this->Flash->success(__('The sua chua linh kien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sua chua linh kien could not be saved. Please, try again.'));
        }
        $this->set(compact('suaChuaLinhKien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Sua Chua Linh Kien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $suaChuaLinhKien = $this->SuaChuaLinhKien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $suaChuaLinhKien = $this->SuaChuaLinhKien->patchEntity($suaChuaLinhKien, $this->request->getData());
            if ($this->SuaChuaLinhKien->save($suaChuaLinhKien)) {
                $this->Flash->success(__('The sua chua linh kien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The sua chua linh kien could not be saved. Please, try again.'));
        }
        $this->set(compact('suaChuaLinhKien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Sua Chua Linh Kien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $suaChuaLinhKien = $this->SuaChuaLinhKien->get($id);
        if ($this->SuaChuaLinhKien->delete($suaChuaLinhKien)) {
            $this->Flash->success(__('The sua chua linh kien has been deleted.'));
        } else {
            $this->Flash->error(__('The sua chua linh kien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
