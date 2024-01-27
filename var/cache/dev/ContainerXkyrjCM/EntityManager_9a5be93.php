<?php

namespace ContainerXkyrjCM;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder8b64e = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer82f47 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9a540 = [
        
    ];

    public function getConnection()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getConnection', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getMetadataFactory', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getExpressionBuilder', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'beginTransaction', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getCache', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getCache();
    }

    public function transactional($func)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'transactional', array('func' => $func), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'wrapInTransaction', array('func' => $func), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'commit', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->commit();
    }

    public function rollback()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'rollback', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getClassMetadata', array('className' => $className), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'createQuery', array('dql' => $dql), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'createNamedQuery', array('name' => $name), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'createQueryBuilder', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'flush', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'clear', array('entityName' => $entityName), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->clear($entityName);
    }

    public function close()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'close', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->close();
    }

    public function persist($entity)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'persist', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'remove', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'detach', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'merge', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getRepository', array('entityName' => $entityName), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'contains', array('entity' => $entity), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getEventManager', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getConfiguration', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'isOpen', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getUnitOfWork', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getProxyFactory', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'initializeObject', array('obj' => $obj), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->initializeObject($obj);
    }

    public function isUninitializedObject($obj) : bool
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'isUninitializedObject', array('obj' => $obj), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->isUninitializedObject($obj);
    }

    public function getFilters()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'getFilters', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'isFiltersStateClean', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'hasFilters', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return $this->valueHolder8b64e->hasFilters();
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

        $instance->initializer82f47 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder8b64e) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder8b64e = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder8b64e->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__get', ['name' => $name], $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        if (isset(self::$publicProperties9a540[$name])) {
            return $this->valueHolder8b64e->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b64e;

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

        $targetObject = $this->valueHolder8b64e;
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
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b64e;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder8b64e;
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
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__isset', array('name' => $name), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b64e;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder8b64e;
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
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__unset', array('name' => $name), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8b64e;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder8b64e;
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
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__clone', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        $this->valueHolder8b64e = clone $this->valueHolder8b64e;
    }

    public function __sleep()
    {
        $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, '__sleep', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;

        return array('valueHolder8b64e');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer82f47 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer82f47;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer82f47 && ($this->initializer82f47->__invoke($valueHolder8b64e, $this, 'initializeProxy', array(), $this->initializer82f47) || 1) && $this->valueHolder8b64e = $valueHolder8b64e;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8b64e;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8b64e;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
