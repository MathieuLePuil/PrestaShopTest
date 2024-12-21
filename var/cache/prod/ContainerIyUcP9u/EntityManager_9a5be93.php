<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera3078 = null;
    private $initializerdcf91 = null;
    private static $publicProperties29f50 = [
        
    ];
    public function getConnection()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getConnection', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getMetadataFactory', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getExpressionBuilder', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'beginTransaction', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getCache', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getCache();
    }
    public function transactional($func)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'transactional', array('func' => $func), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'wrapInTransaction', array('func' => $func), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'commit', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->commit();
    }
    public function rollback()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'rollback', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getClassMetadata', array('className' => $className), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'createQuery', array('dql' => $dql), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'createNamedQuery', array('name' => $name), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'createQueryBuilder', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'flush', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'clear', array('entityName' => $entityName), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->clear($entityName);
    }
    public function close()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'close', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->close();
    }
    public function persist($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'persist', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'remove', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'refresh', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'detach', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'merge', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getRepository', array('entityName' => $entityName), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'contains', array('entity' => $entity), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getEventManager', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getConfiguration', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'isOpen', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getUnitOfWork', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getProxyFactory', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'initializeObject', array('obj' => $obj), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'getFilters', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'isFiltersStateClean', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, 'hasFilters', array(), $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        return $this->valueHoldera3078->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerdcf91 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHoldera3078) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHoldera3078 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHoldera3078->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerdcf91 && ($this->initializerdcf91->__invoke($valueHoldera3078, $this, '__get', ['name' => $name], $this->initializerdcf91) || 1) && $this->valueHoldera3078 = $valueHoldera3078;
        if (isset(self::$publicProperties29f50[$name])) {
            return $this->valueHoldera3078->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
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
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
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
