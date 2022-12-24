<?php

namespace AsadCuet\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;
use AsadCuet\LaravelInstaller\Helpers\EnvironmentManager;
use AsadCuet\LaravelInstaller\Request\UpdateRequest;

/**
 * Class EnvironmentController
 * @package FroidAsadCueten\LaravelInstaller\Controllers
 */
class EnvironmentController extends Controller
{

    /**
     * @var EnvironmentManager
     */
    protected $environmentManager;

    /**
     * @param EnvironmentManager $environmentManager
     */
    public function __construct(EnvironmentManager $environmentManager)
    {
        $this->environmentManager = $environmentManager;
    }

    /**
     * Display the Environment page.
     *
     * @return \Illuminate\View\View
     */
    public function environment()
    {
        $envConfig = $this->environmentManager->getEnvContent();

        return view('vendor.installer.environment', compact('envConfig'));
    }

    /**
     * @param UpdateRequest $request
     * @return string
     */
    public function save(UpdateRequest $request)
    {

        $message = $this->environmentManager->saveFile($request);
        return $message;

    }

}
