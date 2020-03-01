<?php

namespace Customer\Controller;

use Customer\Model;
use Customer\View;

/**
 * Class Customer
 *
 * @package Customer\Controller
 *
 * @author Ben Watson
 * @since 06 February 2020
 */
class Customer
{
    /**
     * The model to use for the business logic.
     *
     * @var Model\Customer
     */
    protected $model;

    /**
     * The view to handle rendering.
     *
     * @var View\Customer
     */
    protected $view;

    /**
     * Customer constructor.
     *
     * @param Model\Customer $model - the model for business logic
     * @param View\Customer $view - the view for rendering
     */
    public function __construct(Model\Customer $model, View\Customer $view)
    {
        $this->model = $model;
        $this->view = $view;
    }

    /**
     * Generates a plain-text statement of the customer's rental status.
     *
     * @return string - the plain-text statement
     */
    public function getStatement(): string
    {
        return $this->view->getStatement();
    }

    /**
     * Generates an HTML statement of the customer's rental status.
     *
     * @return string - the html statement
     */
    public function getStatementHtml(): string
    {
        return $this->view->getStatementHtml();
    }
}
