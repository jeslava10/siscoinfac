<?php

namespace App\Repositories;

interface RepositoryInterface
{

    /**
     * Get's all model.
     *
     * @return mixed
     */

    public function all();


        /**
     * create.
     *
     * 
     * @param array
     */

    public function create(array $data);


    /**
     * Updates.
     *
     * @param int
     * @param array
     */
    public function update(array $data, $id);

    /**
     * Deletes.
     *
     * @param int
     */

    public function delete($id);

    /**
     * show.
     *
     * @param int
     */
    
    public function show($id);
}
