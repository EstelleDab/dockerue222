<?php

namespace ContainerWbnU0lR;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder7266b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializera3531 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesd0318 = [
        
    ];

    public function getConnection()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getConnection', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getMetadataFactory', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getExpressionBuilder', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'beginTransaction', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getCache', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getCache();
    }

    public function transactional($func)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'transactional', array('func' => $func), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'wrapInTransaction', array('func' => $func), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'commit', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->commit();
    }

    public function rollback()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'rollback', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getClassMetadata', array('className' => $className), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'createQuery', array('dql' => $dql), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'createNamedQuery', array('name' => $name), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'createQueryBuilder', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'flush', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'clear', array('entityName' => $entityName), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->clear($entityName);
    }

    public function close()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'close', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->close();
    }

    public function persist($entity)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'persist', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'remove', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'detach', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'merge', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getRepository', array('entityName' => $entityName), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'contains', array('entity' => $entity), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getEventManager', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getConfiguration', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'isOpen', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getUnitOfWork', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getProxyFactory', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'initializeObject', array('obj' => $obj), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'getFilters', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'isFiltersStateClean', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'hasFilters', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return $this->valueHolder7266b->hasFilters();
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

        $instance->initializera3531 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder7266b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder7266b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder7266b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__get', ['name' => $name], $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        if (isset(self::$publicPropertiesd0318[$name])) {
            return $this->valueHolder7266b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7266b;

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

        $targetObject = $this->valueHolder7266b;
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
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7266b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder7266b;
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
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__isset', array('name' => $name), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7266b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder7266b;
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
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__unset', array('name' => $name), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder7266b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder7266b;
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
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__clone', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        $this->valueHolder7266b = clone $this->valueHolder7266b;
    }

    public function __sleep()
    {
        $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, '__sleep', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;

        return array('valueHolder7266b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializera3531 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializera3531;
    }

    public function initializeProxy() : bool
    {
        return $this->initializera3531 && ($this->initializera3531->__invoke($valueHolder7266b, $this, 'initializeProxy', array(), $this->initializera3531) || 1) && $this->valueHolder7266b = $valueHolder7266b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder7266b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder7266b;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
