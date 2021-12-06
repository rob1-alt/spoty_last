<?php

namespace ContainerDwUNx1P;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8f935 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer0b1b2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties28b29 = [
        
    ];

    public function getConnection()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getConnection', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getMetadataFactory', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getExpressionBuilder', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'beginTransaction', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getCache', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getCache();
    }

    public function transactional($func)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'transactional', array('func' => $func), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'wrapInTransaction', array('func' => $func), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'commit', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->commit();
    }

    public function rollback()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'rollback', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getClassMetadata', array('className' => $className), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'createQuery', array('dql' => $dql), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'createNamedQuery', array('name' => $name), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'createQueryBuilder', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'flush', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'clear', array('entityName' => $entityName), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->clear($entityName);
    }

    public function close()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'close', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->close();
    }

    public function persist($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'persist', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'remove', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'refresh', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'detach', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'merge', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getRepository', array('entityName' => $entityName), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'contains', array('entity' => $entity), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getEventManager', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getConfiguration', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'isOpen', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getUnitOfWork', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getProxyFactory', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'initializeObject', array('obj' => $obj), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'getFilters', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'isFiltersStateClean', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'hasFilters', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return $this->valueHolder8f935->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer0b1b2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder8f935) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8f935 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8f935->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__get', ['name' => $name], $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        if (isset(self::$publicProperties28b29[$name])) {
            return $this->valueHolder8f935->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f935;

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

        $targetObject = $this->valueHolder8f935;
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
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f935;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8f935;
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
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__isset', array('name' => $name), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f935;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8f935;
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
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__unset', array('name' => $name), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8f935;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8f935;
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
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__clone', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        $this->valueHolder8f935 = clone $this->valueHolder8f935;
    }

    public function __sleep()
    {
        $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, '__sleep', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;

        return array('valueHolder8f935');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer0b1b2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer0b1b2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer0b1b2 && ($this->initializer0b1b2->__invoke($valueHolder8f935, $this, 'initializeProxy', array(), $this->initializer0b1b2) || 1) && $this->valueHolder8f935 = $valueHolder8f935;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8f935;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8f935;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
