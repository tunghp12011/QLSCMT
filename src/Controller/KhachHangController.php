<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * KhachHang Controller
 *
 * @property \App\Model\Table\KhachHangTable $KhachHang
 */
class KhachHangController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->KhachHang->find();
        $khachHang = $this->paginate($query);

        $this->set(compact('khachHang'));
    }

    /**
     * View method
     *
     * @param string|null $id Khach Hang id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $khachHang = $this->KhachHang->get($id, contain: []);
        $this->set(compact('khachHang'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $khachHang = $this->KhachHang->newEmptyEntity();
        if ($this->request->is('post')) {
            $khachHang = $this->KhachHang->patchEntity($khachHang, $this->request->getData());
            if ($this->KhachHang->save($khachHang)) {
                $this->Flash->success(__('The khach hang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khach hang could not be saved. Please, try again.'));
        }
        $this->set(compact('khachHang'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Khach Hang id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $khachHang = $this->KhachHang->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $khachHang = $this->KhachHang->patchEntity($khachHang, $this->request->getData());
            if ($this->KhachHang->save($khachHang)) {
                $this->Flash->success(__('The khach hang has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The khach hang could not be saved. Please, try again.'));
        }
        $this->set(compact('khachHang'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Khach Hang id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $khachHang = $this->KhachHang->get($id);
        if ($this->KhachHang->delete($khachHang)) {
            $this->Flash->success(__('The khach hang has been deleted.'));
        } else {
            $this->Flash->error(__('The khach hang could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
