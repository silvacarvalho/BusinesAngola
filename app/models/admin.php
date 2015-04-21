<?php
namespace models;

class Admin extends \core\Model
{

    /**
     * @return array Array de dados com todos os registros encontrados na base.
     */
    public function get_usuarios()
    {
        return $this->_db->select('SELECT * FROM ' . PREFIX . 'usuario ORDER BY nome');
    }

    /**
     * @param $id Id do registro Único que será retornado.
     * @return array Retorna os dados de um determinado registro.
     */
    public function get_usuario($id)
    {
        return $this->_db->select("SELECT * FROM " . PREFIX . "usuario WHERE id = :id ORDER BY nome", ['id' => $id]);
    }

    /**
     * Insere os dados na base.
     * @param $data Dados que serão inseridos na base de dados.
     * @return array Array de dados inseridos na base.
     */
    public function insert_usuario($data)
    {
        return $this->_db->insert(PREFIX . "usuario", $data);
    }

    /**
     * Atualiza os dados na tabela.
     * @param $data  Dados que substituirão os atuais na tabela.
     * @param $where Registro que será atualizado.
     */
    public function update_usuario($data, $where)
    {
        return $this->_db->update(PREFIX . "usuario", $data, $where);
    }

    /**
     * Deleta registro.
     * @param $where registro que será eliminado da tabela.
     */
    public function delete_usuario($where)
    {
        return $this->_db->delete(PREFIX . "usuario", $where);
    }
}