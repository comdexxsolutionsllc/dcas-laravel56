<?php

namespace DCAS\Traits;

trait Authorizable
{

    /**
     * @var array
     */
    private $abilities = [
        'index'   => 'view',
        'edit'    => 'edit',
        'show'    => 'view',
        'update'  => 'edit',
        'create'  => 'add',
        'store'   => 'add',
        'destroy' => 'delete',
    ];

    /**
     * Override of callAction to perform the authorization before.
     *
     * @param $method
     * @param $parameters
     *
     * @return mixed
     */
    public function callAction($method, $parameters)
    {
        if ($ability = $this->getAbility($method)) {
            $this->authorize($ability);
        }

        return parent::callAction($method, $parameters);
    }

    /**
     * @param $method
     *
     * @return null|string
     */
    public function getAbility($method)
    {
        $routeName = explode('.', \Request::route()->getName());
        $action = array_get($this->getAbilities(), $method);

        return $action ? $action . '_' . $routeName[0] : null;
    }

    /**
     * @return array
     */
    private function getAbilities(): array
    {
        return $this->abilities;
    }

    /**
     * @param $abilities
     */
    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;
    }
}
