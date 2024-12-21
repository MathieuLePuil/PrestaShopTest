<?php

class ModuleRepository_091bb2f extends \PrestaShop\PrestaShop\Core\Module\ModuleRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera3078 = null;
    private $initializerdcf91 = null;
    private static $publicProperties29f50 = [
        
    ];
    public function getList() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getList', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getList();
    }
    public function getInstalledModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getInstalledModules', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getInstalledModules();
    }
    public function getMustBeConfiguredModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getMustBeConfiguredModules', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getMustBeConfiguredModules();
    }
    public function getUpgradableModules() : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getUpgradableModules', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getUpgradableModules();
    }
    public function getModule(string $moduleName) : \PrestaShop\PrestaShop\Core\Module\ModuleInterface
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getModule', array('moduleName' => $moduleName), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getModule($moduleName);
    }
    public function getModulePath(string $moduleName) : ?string
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getModulePath', array('moduleName' => $moduleName), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getModulePath($moduleName);
    }
    public function setActionUrls(\PrestaShop\PrestaShop\Core\Module\ModuleCollection $collection) : \PrestaShop\PrestaShop\Core\Module\ModuleCollection
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'setActionUrls', array('collection' => $collection), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->setActionUrls($collection);
    }
    public function clearCache(?string $moduleName = null, bool $allShops = false) : bool
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'clearCache', array('moduleName' => $moduleName, 'allShops' => $allShops), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->clearCache($moduleName, $allShops);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $instance, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($instance);
        $instance->initializerdcf91 = $initializer;
        return $instance;
    }
    public function __construct(\PrestaShop\PrestaShop\Adapter\Module\ModuleDataProvider $moduleDataProvider, \PrestaShop\PrestaShop\Adapter\Module\AdminModuleDataProvider $adminModuleDataProvider, \Doctrine\Common\Cache\CacheProvider $cacheProvider, \PrestaShop\PrestaShop\Adapter\HookManager $hookManager, string $modulePath, int $contextLangId)
    {
        static $reflection;
        if (! $this->valueHoldera3078) {
            $reflection = $reflection ?? new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
            $this->valueHoldera3078 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
        }
        $this->valueHoldera3078->__construct($moduleDataProvider, $adminModuleDataProvider, $cacheProvider, $hookManager, $modulePath, $contextLangId);
    }
    public function & __get($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__get', ['name' => $name], $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        if (isset(self::$publicProperties29f50[$name])) {
            return $this->valueHoldera3078->$name;
        }
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3078;
            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera3078;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3078;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHoldera3078;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__isset', array('name' => $name), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3078;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHoldera3078;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__unset', array('name' => $name), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        $realInstanceReflection = new \ReflectionClass('PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera3078;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera3078;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }
    public function __clone()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__clone', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        $this->valueHoldera3078 = clone $this->valueHoldera3078;
    }
    public function __sleep()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__sleep', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return array('valueHoldera3078');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\PrestaShop\PrestaShop\Core\Module\ModuleRepository $instance) {
            unset($instance->moduleDataProvider, $instance->adminModuleDataProvider, $instance->hookManager, $instance->cacheProvider, $instance->modulePath, $instance->installedModules, $instance->modulesFromHook, $instance->contextLangId);
        }, $this, 'PrestaShop\\PrestaShop\\Core\\Module\\ModuleRepository')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerdcf91 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerdcf91;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'initializeProxy', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera3078;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera3078;
    }
}
