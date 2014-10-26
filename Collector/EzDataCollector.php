<?php

namespace HTollefsen\EzDebugBundle\Collector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;

/**
 * Class EzDataCollector
 * @package HTollefsen\EzDebugBundle\Collector
 */
class EzDataCollector extends DataCollector
{
    /**
     * @param Request $request
     * @param Response $response
     * @param \Exception $exception
     */
    public function collect(Request $request, Response $response, \Exception $exception = null)
    {
        $this->data = array(
            'version' => $this->getVersion(),
            'bundles' => $this->getBundles(),
        );
    }

    /**
     * @return mixed
     */
    protected function getBundles() {
        return $this->get('service_container')->getParameter('kernel.bundles');
    }

    /**
     * @return bool|array
     */
    protected function getVersion() {
        $sql = "SELECT value FROM ezsite_data where name = 'ezpublish-version'";
        $version = $this->rawQuery($sql);
        return (isset($version[0]['value']) ? $version[0]['value'] : false);
    }

    /**
     * @param string $sql
     * @return array
     */
    protected function rawQuery($sql) {
        $query = $this->get('doctrine.orm.entity_manager')->getConnection()->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'ezdata';
    }
}
