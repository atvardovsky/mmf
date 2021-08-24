<?php

namespace ContainerMtKCVwe;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdceba = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer194fd = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesc201a = [
        
    ];

    public function getConnection()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getConnection', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getMetadataFactory', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getExpressionBuilder', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'beginTransaction', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getCache', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getCache();
    }

    public function transactional($func)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'transactional', array('func' => $func), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->transactional($func);
    }

    public function commit()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'commit', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->commit();
    }

    public function rollback()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'rollback', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getClassMetadata', array('className' => $className), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'createQuery', array('dql' => $dql), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'createNamedQuery', array('name' => $name), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'createQueryBuilder', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'flush', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'clear', array('entityName' => $entityName), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->clear($entityName);
    }

    public function close()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'close', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->close();
    }

    public function persist($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'persist', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'remove', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'refresh', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'detach', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'merge', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getRepository', array('entityName' => $entityName), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'contains', array('entity' => $entity), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getEventManager', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getConfiguration', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'isOpen', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getUnitOfWork', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getProxyFactory', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'initializeObject', array('obj' => $obj), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'getFilters', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'isFiltersStateClean', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'hasFilters', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return $this->valueHolderdceba->hasFilters();
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

        $instance->initializer194fd = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdceba) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdceba = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdceba->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__get', ['name' => $name], $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        if (isset(self::$publicPropertiesc201a[$name])) {
            return $this->valueHolderdceba->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdceba;

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

        $targetObject = $this->valueHolderdceba;
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
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdceba;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdceba;
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
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__isset', array('name' => $name), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdceba;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdceba;
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
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__unset', array('name' => $name), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdceba;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdceba;
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
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__clone', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        $this->valueHolderdceba = clone $this->valueHolderdceba;
    }

    public function __sleep()
    {
        $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, '__sleep', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;

        return array('valueHolderdceba');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer194fd = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer194fd;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer194fd && ($this->initializer194fd->__invoke($valueHolderdceba, $this, 'initializeProxy', array(), $this->initializer194fd) || 1) && $this->valueHolderdceba = $valueHolderdceba;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdceba;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdceba;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
