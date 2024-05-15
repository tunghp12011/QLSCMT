<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * NhanVien Controller
 *
 * @property \App\Model\Table\NhanVienTable $NhanVien
 */
class NhanVienController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->NhanVien->find();
        $nhanVien = $this->paginate($query);

        $this->set(compact('nhanVien'));
    }

    /**
     * View method
     *
     * @param string|null $id Nhan Vien id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nhanVien = $this->NhanVien->get($id, contain: []);
        $this->set(compact('nhanVien'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nhanVien = $this->NhanVien->newEmptyEntity();
        if ($this->request->is('post')) {
            $nhanVien = $this->NhanVien->patchEntity($nhanVien, $this->request->getData());
            if ($this->NhanVien->save($nhanVien)) {
                $this->Flash->success(__('The nhan vien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nhan vien could not be saved. Please, try again.'));
        }
        $this->set(compact('nhanVien'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nhan Vien id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nhanVien = $this->NhanVien->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nhanVien = $this->NhanVien->patchEntity($nhanVien, $this->request->getData());
            if ($this->NhanVien->save($nhanVien)) {
                $this->Flash->success(__('The nhan vien has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nhan vien could not be saved. Please, try again.'));
        }
        $this->set(compact('nhanVien'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nhan Vien id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nhanVien = $this->NhanVien->get($id);
        if ($this->NhanVien->delete($nhanVien)) {
            $this->Flash->success(__('The nhan vien has been deleted.'));
        } else {
            $this->Flash->error(__('The nhan vien could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
