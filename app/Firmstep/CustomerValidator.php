<?php
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class CustomerValidator {

    use ValidatesRequests;

    private $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function add()
    {
        $this->validate($this->request, [
            'services' => 'required',
            'first-name' => 'required',
            'last-name' => 'required',
            'type' => 'required',
            'title' => 'required',
        ]);
    }

}