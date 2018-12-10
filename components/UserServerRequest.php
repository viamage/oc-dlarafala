<?php namespace Viamage\DlaRafala\Components;

use Cms\Classes\ComponentBase;
use Illuminate\Validation\ValidationException;
use Viamage\DlaRafala\Models\ServerRequest;

class UserServerRequest extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'UserServerRequest Component',
            'description' => 'No description provided yet...',
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function onRun()
    {
        $this->page['ram_options'] = $this->getRamOptions();
    }

    public function onRequestServer()
    {
        $data = post();
        $this->validateRequest($data);
        $serverRequest = new ServerRequest();
        $serverRequest->fill($data);
        $serverRequest->save();

        \Flash::success('Request created properly. Thanks!');

        return \Redirect::to('/request');
    }

    private function validateRequest($data)
    {
        $rules = [
            'email'       => 'required',
            'ram_amount' => 'required',
            'cpu_amount' => 'required',
            'vlan'       => 'required',
            'ip_config'  => 'required',
        ];
        $v = \Validator::make($data, $rules);
        if($v->fails()){
            throw new ValidationException($v);
        }
    }

    public function getRamOptions(){
        return [
            '0.5' => '0.5 GB',
            '1'   => '1 GB',
            '2'   => '2 GB',
            '4'   => '4 GB',
            '8'   => '8 GB',
            '16'  => '16 GB',
        ];
    }
}
