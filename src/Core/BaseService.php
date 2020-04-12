<?php

namespace Thelabdevtz\LaraBase\Core;


abstract class BaseService
{
    /**
     * @var \Illuminate\Support\Collection
     */
    protected $errors;

    public function __construct()
    {
        $this->errors = collect([]);
    }

    /**
     * @param string $message
     * @param int $code
     */
    protected function addError(string $message,int $code = 400)
    {
        $this->errors->push([
            'message' => $message,
            'code' => $code,
        ]);
    }

    /**
     * @return bool
     */
    public function hasErrors()
    {
        return !$this->errors->isEmpty();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function getErrors()
    {
        return $this->errors;
    }
}