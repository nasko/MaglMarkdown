<?php

namespace MaglMarkdownTest\View\Helper;

use MaglMarkdownTest\Bootstrap;
use Zend\View\HelperPluginManager;

/**
 * Description of ModuleTest
 *
 * @author matthias
 */
class MarkdownTest extends \PHPUnit_Framework_TestCase
{

    public function testGetViewHelper()
    {
        $serviceManager = Bootstrap::getServiceManager();

        /* @var $view HelperPluginManager */
        $view = $serviceManager->get('ViewHelperManager');

        $markdown = $view->get('markdown');
        $this->assertInstanceOf('MaglMarkdown\View\Helper\Markdown', $markdown);
        $this->assertInstanceOf('Zend\View\Helper\HelperInterface', $markdown);
    }

    public function testViewHelperWorking()
    {
        $serviceManager = Bootstrap::getServiceManager();

        /* @var $view HelperPluginManager */
        $view = $serviceManager->get('ViewHelperManager');

        $markdown = $view->get('markdown');
        $text = $markdown('some sample string');

        $this->assertNotEmpty($text);
    }

}
