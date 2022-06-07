<?php

namespace Composer\Autoload;

/**
 * ClassLoader implements a PSR-0, PSR-4 and classmap class loader.
 *
 *     $loader = new \Composer\Autoload\ClassLoader();
 *
 *     // register classes with namespaces
 *     $loader->add('Symfony\Component', __DIR__.'/component');
 *     $loader->add('Symfony',           __DIR__.'/framework');
 *
 *     // activate the autoloader
 *     $loader->register();
 *
 *     // to enable searching the include path (eg. for PEAR packages)
 *     $loader->setUseIncludePath(true);
 *
 * In this example, if you try to use a class in the Symfony\Component
 * namespace or one of its children (Symfony\Component\Console for instance),
 * the autoloader will first look for the class under the component/
 * directory, and it will then fallback to the framework/ directory if not
 * found before giving up.
 *
 * This class is loosely based on the Symfony UniversalClassLoader.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Jordi Boggiano <j.boggiano@seld.be>
 * @see    https://www.php-fig.org/psr/psr-0/
 * @see    https://www.php-fig.org/psr/psr-4/
 */
class ClassLoader
{
    /** @var ?string */
    private $vendorDir;

    // PSR-4
    /**
     * @var array[]
     * @psalm-var array<string, array<string, int>>
     */
    private $prefixLengthsPsr4 = array();

    /**
     * @var array[]
     * @psalm-var array<string, array<int, string>>
     */
    private $prefixDirsPsr4 = array();

    /**
     * @var array[]
     * @psalm-var array<string, string>
     */
    private $fallbackDirsPsr4 = array();

    // PSR-0
    /**
     * @var array[]
     * @psalm-var array<string, array<string, string[]>>
     */
    private $prefixesPsr0 = array();

    /**
     * @var array[]
     * @psalm-var array<string, string>
     */
    private $fallbackDirsPsr0 = array();

    /** @var bool */
    private $useIncludePath = false;

    /**
     * @var string[]
     * @psalm-var array<string, string>
     */
    private $classMap = array();

    /** @var bool */
    private $classMapAuthoritative = false;

    /**
     * @var bool[]
     * @psalm-var array<string, bool>
     */
    private $missingClasses = array();

    /** @var ?string */
    private $apcuPrefix;

    /**
     * @var self[]
     */
    private static $registeredLoaders = array();

    /**
     * @param ?string $vendorDir
     */
    public function __construct($vendorDir = null)
    {
        $this->vendorDir = $vendorDir;
    }

    
}
