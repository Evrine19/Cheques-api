<?php

return [

    /**
     * @SWG\Get(
     *     path="/v1/batch",
     *     summary="Get list news",
     *     tags={"News"},
     *     @SWG\Response(
     *         response=200,
     *         description="News",
     *         @SWG\Schema(
     *            type="array",
     *            @SWG\Items(ref="#/definitions/News")
     *         )
     *     ),
     *     @SWG\Response(
     *        response=401,
     *        description="Unauthorized",
     *        @SWG\Schema(ref="#/definitions/Unauthorized")
     *     )
     * )
     */
    'GET batch' => 'batch/index',

    /**
     * @SWG\Post(
     *     path="/v1/batch",
     *     summary="Create data news",
     *     tags={"News"},
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="Data News",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/CreateNews"),
     *     ),
     *     @SWG\Response(
     *         response=201,
     *         description="Data news",
     *         @SWG\Schema(ref="#/definitions/News")
     *     ),
     *     @SWG\Response(
     *         response=422,
     *         description="ValidateErrorException",
     *         @SWG\Schema(ref="#/definitions/ErrorValidate")
     *     )
     * )
     */
    'POST batch' => 'batch/create',

    /**
     * @SWG\Put(
     *     path="/v1/batch/{id}",
     *     summary="Update data news",
     *     tags={"News"},
     *     @SWG\Parameter(
     *         ref="#/parameters/id"
     *     ),
     *     @SWG\Parameter(
     *         name="body",
     *         in="body",
     *         description="Data News",
     *         required=true,
     *         @SWG\Schema(ref="#/definitions/UpdateNews"),
     *     ),
     *     @SWG\Response(
     *         response=202,
     *         description="Data news",
     *         @SWG\Schema(ref="#/definitions/News")
     *     ),
     *     @SWG\Response(
     *         response=422,
     *         description="ValidateErrorException",
     *         @SWG\Schema(ref="#/definitions/ErrorValidate")
     *     )
     * )
     */
    'PUT batch/{id}' => 'batch/update',


    /**
     * @SWG\Get(
     *     path="/v1/batch/{id}",
     *     summary="Get data news",
     *     tags={"News"},
     *     @SWG\Parameter(
     *         ref="#/parameters/id"
     *     ),
     *     @SWG\Response(
     *         response=200,
     *         description="Data news",
     *         @SWG\Schema(ref="#/definitions/News")
     *     ),
     *     @SWG\Response(
     *         response=422,
     *         description="Resource not found",
     *         @SWG\Schema(ref="#/definitions/Not Found")
     *     )
     * )
     */
    'GET batch/{id}' => 'batch/view',

    'GET batch/download/pdf/{id}' => 'batch/download-pdf',

    'GET batch/excel/{id}' => 'batch/download-excel',

    'GET batch/pdf/{id}' => 'batch/pdf',
    
      'GET cheques/record/{id}' => 'cheques/record',

    // 'GET batch/excel/{id}' => 'batch/excel',
];