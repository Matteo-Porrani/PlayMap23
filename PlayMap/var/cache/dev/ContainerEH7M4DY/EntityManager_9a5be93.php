<?php

namespace ContainerEH7M4DY;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder9b0f7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb9232 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties56ebd = [
        
    ];

    public function getConnection()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getConnection', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getMetadataFactory', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getExpressionBuilder', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'beginTransaction', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getCache', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'transactional', array('func' => $func), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->transactional($func);
    }

    public function commit()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'commit', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->commit();
    }

    public function rollback()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'rollback', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getClassMetadata', array('className' => $className), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'createQuery', array('dql' => $dql), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'createNamedQuery', array('name' => $name), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'createQueryBuilder', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'flush', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'clear', array('entityName' => $entityName), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->clear($entityName);
    }

    public function close()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'close', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->close();
    }

    public function persist($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'persist', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'remove', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'refresh', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'detach', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'merge', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'contains', array('entity' => $entity), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getEventManager', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getConfiguration', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'isOpen', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getUnitOfWork', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getProxyFactory', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'initializeObject', array('obj' => $obj), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'getFilters', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'isFiltersStateClean', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'hasFilters', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return $this->valueHolder9b0f7->hasFilters();
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

        $instance->initializerb9232 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder9b0f7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder9b0f7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder9b0f7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__get', ['name' => $name], $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        if (isset(self::$publicProperties56ebd[$name])) {
            return $this->valueHolder9b0f7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b0f7;

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

        $targetObject = $this->valueHolder9b0f7;
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
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b0f7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder9b0f7;
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
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__isset', array('name' => $name), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b0f7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder9b0f7;
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
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__unset', array('name' => $name), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9b0f7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder9b0f7;
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
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__clone', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        $this->valueHolder9b0f7 = clone $this->valueHolder9b0f7;
    }

    public function __sleep()
    {
        $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, '__sleep', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;

        return array('valueHolder9b0f7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb9232 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb9232;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb9232 && ($this->initializerb9232->__invoke($valueHolder9b0f7, $this, 'initializeProxy', array(), $this->initializerb9232) || 1) && $this->valueHolder9b0f7 = $valueHolder9b0f7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9b0f7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9b0f7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
