# Introduction 

Here is the bad news: the new developer you hired has written some terrible, atrocious code. 
No one can understand what it does. 

The good news: at least there are unit tests to prove the code is working. 

You job is to refactor the code and make it readable, while keeping the code in working order (pass all tests). 

# How To Start

1. Clone this repository `git clone https://github.com/CodelyTV/incomprehensible-finder-refactoring-kata`
2. Build the docker container which contains all the required dependencies with `make build`
3. Run the tests with `make test`
4. Start refactoring! 

The primary goal is to refactor the code in `src/Algorithm/Finder.php` - as it stands the code is incomprehensible. 

# Tips

* Start with simple rename refactors so you can better understand the abstractions you are working with. Rename any class or any variable. 
* Move on to extract methods and making the code more modular.
* See if you can also eliminate switch statements and multiple exit points from methods. 

Anything is fair game, create new classes, new methods, and rename tests. 
The only restriction is that the existing tests have to keep working. 
Lean on the tests and run them after every small change to make sure you are on the right path.

# How to End

You can stop when you feel the code is good enough, something you can come back to in 6 months and understand. 

# Helpful resources

## PHP 7

I've decided to port the kata directly to PHP 7 instead of 5.6. This will allow you to practice also with the new PHP features. By the way, if you're not used to it yet, here you have some useful resources:

* [PHP 7 new features](http://php.net/manual/en/migration70.new-features.php)
* [Scalar type declarations example](https://github.com/tpunt/PHP7-Reference#scalar-type-declarations)
* [Return type declarations example](https://github.com/tpunt/PHP7-Reference#return-type-declarations)

## PHPUnit 5.5

* [Introduction to writing tests for PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html)
* [Testing exceptions with PHPUnit](https://phpunit.de/manual/current/en/writing-tests-for-phpunit.html#writing-tests-for-phpunit.exceptions)
* [PHPUnit assertions](https://phpunit.de/manual/current/en/appendixes.assertions.html)

## Refactoring

* [Refactoring.guru Code Smells catalog](https://refactoring.guru/smells/smells)
* [Refactoring.guru Refactorings catalog](https://refactoring.guru/catalog)
* [SourceMaking Refactorings catalog](https://sourcemaking.com/refactoring)
* [Martin Fowler Refactorings catalog](http://refactoring.com/catalog/)
* [CodelyTV Refactoring videos (Spanish)](http://codely.tv/tag/refactoring/)

# Credits and other programming languages

This kata is a PHP port of [the original Incomprehensible Finder Refactoring Kata](https://github.com/OdeToCode/Katas/tree/master/Refactoring) created by [K. Scott Allen](https://github.com/OdeToCode).

You can also find the kata in different programming languages in isolated repositories just ready to clone and enjoy: 
* [Java](https://github.com/DoDevJutsu/incomprehensible-finder-refactoring-java)
* [C#](https://github.com/DoDevJutsu/incomprehensible-finder-refactoring-c-sharp)
* [PHP](https://github.com/CodelyTV/incomprehensible-finder-refactoring-kata)
* [Scala](https://github.com/CodelyTV/incomprehensible-finder-refactoring-kata-scala)

This port has been developed by [CodelyTV](http://codely.tv/) in order to have it available for the [Software Craftsmanship Barcelona Coding Dojo session](http://www.meetup.com/Barcelona-Software-Craftsmanship/events/233107734/).
Come with us and have some fun if you're near Barcelona the next Monday, August 22nd!
#Directory Structure

.
├── composer.json
├── composer.lock
├── Dockerfile
├── Makefile
├── phpunit.xml
├── README.md
├── src
│   └── Algorithm
│       ├── Fight.php
│       ├── FightType.php
│       ├── Finder.php
│       └── Player.php
├── tests
│   └── Algorithm
│       └── FinderTest.php
└── vendor
    ├── autoload.php
    ├── bin
    │   ├── parallel-lint -> ../jakub-onderka/php-parallel-lint/parallel-lint
    │   └── phpunit -> ../phpunit/phpunit/phpunit
    ├── composer
    │   ├── autoload_classmap.php
    │   ├── autoload_files.php
    │   ├── autoload_namespaces.php
    │   ├── autoload_psr4.php
    │   ├── autoload_real.php
    │   ├── autoload_static.php
    │   ├── ClassLoader.php
    │   ├── installed.json
    │   └── LICENSE
    ├── doctrine
    │   └── instantiator
    │       ├── composer.json
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── phpmd.xml.dist
    │       ├── phpunit.xml.dist
    │       ├── README.md
    │       ├── src
    │       │   └── Doctrine
    │       │       └── Instantiator
    │       │           ├── Exception
    │       │           │   ├── ExceptionInterface.php
    │       │           │   ├── InvalidArgumentException.php
    │       │           │   └── UnexpectedValueException.php
    │       │           ├── InstantiatorInterface.php
    │       │           └── Instantiator.php
    │       └── tests
    │           └── DoctrineTest
    │               ├── InstantiatorPerformance
    │               │   └── InstantiatorPerformanceEvent.php
    │               ├── InstantiatorTest
    │               │   ├── Exception
    │               │   │   ├── InvalidArgumentExceptionTest.php
    │               │   │   └── UnexpectedValueExceptionTest.php
    │               │   └── InstantiatorTest.php
    │               └── InstantiatorTestAsset
    │                   ├── AbstractClassAsset.php
    │                   ├── ArrayObjectAsset.php
    │                   ├── ExceptionAsset.php
    │                   ├── FinalExceptionAsset.php
    │                   ├── PharAsset.php
    │                   ├── PharExceptionAsset.php
    │                   ├── SerializableArrayObjectAsset.php
    │                   ├── SimpleSerializableAsset.php
    │                   ├── SimpleTraitAsset.php
    │                   ├── UnCloneableAsset.php
    │                   ├── UnserializeExceptionArrayObjectAsset.php
    │                   ├── WakeUpNoticesAsset.php
    │                   └── XMLReaderAsset.php
    ├── jakub-onderka
    │   └── php-parallel-lint
    │       ├── appveyor.yml
    │       ├── bin
    │       │   └── skip-linting.php
    │       ├── box.json
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── parallel-lint
    │       ├── parallel-lint.php
    │       ├── phpcs-ruleset.xml
    │       ├── README.md
    │       ├── src
    │       │   ├── ErrorFormatter.php
    │       │   ├── Error.php
    │       │   ├── exceptions.php
    │       │   ├── JsonSerializable.php
    │       │   ├── Manager.php
    │       │   ├── Output.php
    │       │   ├── ParallelLint.php
    │       │   ├── Process
    │       │   │   ├── GitBlameProcess.php
    │       │   │   ├── LintProcess.php
    │       │   │   ├── PhpExecutable.php
    │       │   │   ├── PhpProcess.php
    │       │   │   ├── Process.php
    │       │   │   └── SkipLintProcess.php
    │       │   ├── Result.php
    │       │   └── Settings.php
    │       └── tests
    │           ├── examples
    │           │   ├── example-01
    │           │   │   └── empty-file
    │           │   ├── example-02
    │           │   │   └── example.php
    │           │   ├── example-03
    │           │   │   └── example.php
    │           │   ├── example-04
    │           │   │   ├── dir1
    │           │   │   │   ├── dir2
    │           │   │   │   │   └── index.php
    │           │   │   │   └── index.php
    │           │   │   └── index.php
    │           │   └── example-images
    │           │       └── use-error.png
    │           ├── Manager.run.phpt
    │           ├── ParallelLint.lint.phpt
    │           ├── Settings.parseArguments.phpt
    │           ├── SkipLintProcess.phpt
    │           └── skip-on-5.3
    │               ├── class.php
    │               └── trait.php
    ├── myclabs
    │   └── deep-copy
    │       ├── composer.json
    │       ├── doc
    │       │   ├── clone.png
    │       │   ├── deep-clone.png
    │       │   ├── deep-copy.png
    │       │   └── graph.png
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           └── DeepCopy
    │               ├── DeepCopy.php
    │               ├── Exception
    │               │   └── CloneException.php
    │               ├── Filter
    │               │   ├── Doctrine
    │               │   │   ├── DoctrineCollectionFilter.php
    │               │   │   └── DoctrineEmptyCollectionFilter.php
    │               │   ├── Filter.php
    │               │   ├── KeepFilter.php
    │               │   ├── ReplaceFilter.php
    │               │   └── SetNullFilter.php
    │               ├── Matcher
    │               │   ├── Matcher.php
    │               │   ├── PropertyMatcher.php
    │               │   ├── PropertyNameMatcher.php
    │               │   └── PropertyTypeMatcher.php
    │               ├── Reflection
    │               │   └── ReflectionHelper.php
    │               ├── TypeFilter
    │               │   ├── ReplaceFilter.php
    │               │   ├── ShallowCopyFilter.php
    │               │   └── TypeFilter.php
    │               └── TypeMatcher
    │                   └── TypeMatcher.php
    ├── phpdocumentor
    │   ├── reflection-common
    │   │   ├── composer.json
    │   │   ├── composer.lock
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Element.php
    │   │   │   ├── File.php
    │   │   │   ├── Fqsen.php
    │   │   │   ├── Location.php
    │   │   │   ├── ProjectFactory.php
    │   │   │   └── Project.php
    │   │   └── tests
    │   │       ├── common
    │   │       │   └── bootstrap.php
    │   │       └── unit
    │   │           └── FqsenTest.php
    │   ├── reflection-docblock
    │   │   ├── composer.json
    │   │   ├── composer.lock
    │   │   ├── examples
    │   │   │   ├── 01-interpreting-a-simple-docblock.php
    │   │   │   ├── 02-interpreting-tags.php
    │   │   │   ├── 03-reconstituting-a-docblock.php
    │   │   │   ├── 04-adding-your-own-tag.php
    │   │   │   └── playing-with-descriptions
    │   │   │       └── 02-escaping.php
    │   │   ├── LICENSE
    │   │   ├── phpmd.xml.dist
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── DocBlock
    │   │   │   │   ├── DescriptionFactory.php
    │   │   │   │   ├── Description.php
    │   │   │   │   ├── ExampleFinder.php
    │   │   │   │   ├── Serializer.php
    │   │   │   │   ├── StandardTagFactory.php
    │   │   │   │   ├── TagFactory.php
    │   │   │   │   ├── Tag.php
    │   │   │   │   └── Tags
    │   │   │   │       ├── Author.php
    │   │   │   │       ├── BaseTag.php
    │   │   │   │       ├── Covers.php
    │   │   │   │       ├── Deprecated.php
    │   │   │   │       ├── Example.php
    │   │   │   │       ├── Factory
    │   │   │   │       │   ├── StaticMethod.php
    │   │   │   │       │   └── Strategy.php
    │   │   │   │       ├── Formatter
    │   │   │   │       │   └── PassthroughFormatter.php
    │   │   │   │       ├── Formatter.php
    │   │   │   │       ├── Generic.php
    │   │   │   │       ├── Link.php
    │   │   │   │       ├── Method.php
    │   │   │   │       ├── Param.php
    │   │   │   │       ├── Property.php
    │   │   │   │       ├── PropertyRead.php
    │   │   │   │       ├── PropertyWrite.php
    │   │   │   │       ├── Return_.php
    │   │   │   │       ├── See.php
    │   │   │   │       ├── Since.php
    │   │   │   │       ├── Source.php
    │   │   │   │       ├── Throws.php
    │   │   │   │       ├── Uses.php
    │   │   │   │       ├── Var_.php
    │   │   │   │       └── Version.php
    │   │   │   ├── DocBlockFactoryInterface.php
    │   │   │   ├── DocBlockFactory.php
    │   │   │   └── DocBlock.php
    │   │   └── tests
    │   │       ├── integration
    │   │       │   ├── InterpretingDocBlocksTest.php
    │   │       │   ├── ReconstitutingADocBlockTest.php
    │   │       │   └── UsingTagsTest.php
    │   │       └── unit
    │   │           ├── DocBlock
    │   │           │   ├── DescriptionFactoryTest.php
    │   │           │   ├── DescriptionTest.php
    │   │           │   ├── SerializerTest.php
    │   │           │   ├── StandardTagFactoryTest.php
    │   │           │   └── Tags
    │   │           │       ├── AuthorTest.php
    │   │           │       ├── CoversTest.php
    │   │           │       ├── DeprecatedTest.php
    │   │           │       ├── Formatter
    │   │           │       │   └── PassthroughFormatterTest.php
    │   │           │       ├── GenericTest.php
    │   │           │       ├── LinkTest.php
    │   │           │       ├── MethodTest.php
    │   │           │       ├── ParamTest.php
    │   │           │       ├── PropertyReadTest.php
    │   │           │       ├── PropertyTest.php
    │   │           │       ├── PropertyWriteTest.php
    │   │           │       ├── ReturnTest.php
    │   │           │       ├── SeeTest.php
    │   │           │       ├── SinceTest.php
    │   │           │       ├── SourceTest.php
    │   │           │       ├── ThrowsTest.php
    │   │           │       ├── UsesTest.php
    │   │           │       ├── VarTest.php
    │   │           │       └── VersionTest.php
    │   │           ├── DocBlockFactoryTest.php
    │   │           └── DocBlockTest.php
    │   └── type-resolver
    │       ├── composer.json
    │       ├── examples
    │       │   ├── 01-resolving-simple-types.php
    │       │   ├── 02-resolving-classes.php
    │       │   ├── 03-resolving-all-elements.php
    │       │   ├── 04-discovering-the-context-using-class-reflection.php
    │       │   ├── 05-discovering-the-context-using-method-reflection.php
    │       │   ├── 06-discovering-the-context-using-file-contents.php
    │       │   └── Classy.php
    │       ├── LICENSE
    │       ├── phpmd.xml.dist
    │       ├── phpunit.xml.dist
    │       ├── README.md
    │       ├── src
    │       │   ├── FqsenResolver.php
    │       │   ├── Type.php
    │       │   ├── TypeResolver.php
    │       │   └── Types
    │       │       ├── Array_.php
    │       │       ├── Boolean.php
    │       │       ├── Callable_.php
    │       │       ├── Compound.php
    │       │       ├── ContextFactory.php
    │       │       ├── Context.php
    │       │       ├── Float_.php
    │       │       ├── Integer.php
    │       │       ├── Mixed.php
    │       │       ├── Null_.php
    │       │       ├── Object_.php
    │       │       ├── Resource.php
    │       │       ├── Scalar.php
    │       │       ├── Self_.php
    │       │       ├── Static_.php
    │       │       ├── String_.php
    │       │       ├── This.php
    │       │       └── Void_.php
    │       └── tests
    │           └── unit
    │               ├── TypeResolverTest.php
    │               └── Types
    │                   ├── ContextFactoryTest.php
    │                   └── ContextTest.php
    ├── phpspec
    │   └── prophecy
    │       ├── CHANGES.md
    │       ├── composer.json
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── README.md
    │       ├── spec
    │       │   └── Prophecy
    │       │       ├── Argument
    │       │       │   ├── ArgumentsWildcardSpec.php
    │       │       │   └── Token
    │       │       │       ├── AnyValuesTokenSpec.php
    │       │       │       ├── AnyValueTokenSpec.php
    │       │       │       ├── ApproximateValueTokenSpec.php
    │       │       │       ├── ArrayCountTokenSpec.php
    │       │       │       ├── ArrayEntryTokenSpec.php
    │       │       │       ├── ArrayEveryEntryTokenSpec.php
    │       │       │       ├── CallbackTokenSpec.php
    │       │       │       ├── ExactValueTokenSpec.php
    │       │       │       ├── IdenticalValueTokenSpec.php
    │       │       │       ├── LogicalAndTokenSpec.php
    │       │       │       ├── LogicalNotTokenSpec.php
    │       │       │       ├── ObjectStateTokenSpec.php
    │       │       │       ├── StringContainsTokenSpec.php
    │       │       │       └── TypeTokenSpec.php
    │       │       ├── ArgumentSpec.php
    │       │       ├── Call
    │       │       │   ├── CallCenterSpec.php
    │       │       │   └── CallSpec.php
    │       │       ├── Comparator
    │       │       │   ├── ClosureComparatorSpec.php
    │       │       │   ├── FactorySpec.php
    │       │       │   └── ProphecyComparatorSpec.php
    │       │       ├── Doubler
    │       │       │   ├── ClassPatch
    │       │       │   │   ├── DisableConstructorPatchSpec.php
    │       │       │   │   ├── HhvmExceptionPatchSpec.php
    │       │       │   │   ├── KeywordPatchSpec.php
    │       │       │   │   ├── MagicCallPatchSpec.php
    │       │       │   │   ├── ProphecySubjectPatchSpec.php
    │       │       │   │   ├── ReflectionClassNewInstancePatchSpec.php
    │       │       │   │   ├── SplFileInfoPatchSpec.php
    │       │       │   │   └── TraversablePatchSpec.php
    │       │       │   ├── DoublerSpec.php
    │       │       │   ├── Generator
    │       │       │   │   ├── ClassCodeGeneratorSpec.php
    │       │       │   │   ├── ClassCreatorSpec.php
    │       │       │   │   ├── ClassMirrorSpec.php
    │       │       │   │   └── Node
    │       │       │   │       ├── ArgumentNodeSpec.php
    │       │       │   │       ├── ClassNodeSpec.php
    │       │       │   │       └── MethodNodeSpec.php
    │       │       │   ├── LazyDoubleSpec.php
    │       │       │   └── NameGeneratorSpec.php
    │       │       ├── Exception
    │       │       │   ├── Call
    │       │       │   │   └── UnexpectedCallExceptionSpec.php
    │       │       │   ├── Doubler
    │       │       │   │   ├── ClassCreatorExceptionSpec.php
    │       │       │   │   ├── ClassMirrorExceptionSpec.php
    │       │       │   │   ├── ClassNotFoundExceptionSpec.php
    │       │       │   │   ├── DoubleExceptionSpec.php
    │       │       │   │   ├── InterfaceNotFoundExceptionSpec.php
    │       │       │   │   ├── MethodNotExtendableExceptionSpec.php
    │       │       │   │   └── MethodNotFoundExceptionSpec.php
    │       │       │   ├── Prediction
    │       │       │   │   ├── AggregateExceptionSpec.php
    │       │       │   │   ├── NoCallsExceptionSpec.php
    │       │       │   │   ├── UnexpectedCallsCountExceptionSpec.php
    │       │       │   │   └── UnexpectedCallsExceptionSpec.php
    │       │       │   └── Prophecy
    │       │       │       ├── MethodProphecyExceptionSpec.php
    │       │       │       └── ObjectProphecyExceptionSpec.php
    │       │       ├── Prediction
    │       │       │   ├── CallbackPredictionSpec.php
    │       │       │   ├── CallPredictionSpec.php
    │       │       │   ├── CallTimesPredictionSpec.php
    │       │       │   └── NoCallsPredictionSpec.php
    │       │       ├── Promise
    │       │       │   ├── CallbackPromiseSpec.php
    │       │       │   ├── ReturnArgumentPromiseSpec.php
    │       │       │   ├── ReturnPromiseSpec.php
    │       │       │   └── ThrowPromiseSpec.php
    │       │       ├── Prophecy
    │       │       │   ├── MethodProphecySpec.php
    │       │       │   ├── ObjectProphecySpec.php
    │       │       │   └── RevealerSpec.php
    │       │       ├── ProphetSpec.php
    │       │       └── Util
    │       │           └── StringUtilSpec.php
    │       └── src
    │           └── Prophecy
    │               ├── Argument
    │               │   ├── ArgumentsWildcard.php
    │               │   └── Token
    │               │       ├── AnyValuesToken.php
    │               │       ├── AnyValueToken.php
    │               │       ├── ApproximateValueToken.php
    │               │       ├── ArrayCountToken.php
    │               │       ├── ArrayEntryToken.php
    │               │       ├── ArrayEveryEntryToken.php
    │               │       ├── CallbackToken.php
    │               │       ├── ExactValueToken.php
    │               │       ├── IdenticalValueToken.php
    │               │       ├── LogicalAndToken.php
    │               │       ├── LogicalNotToken.php
    │               │       ├── ObjectStateToken.php
    │               │       ├── StringContainsToken.php
    │               │       ├── TokenInterface.php
    │               │       └── TypeToken.php
    │               ├── Argument.php
    │               ├── Call
    │               │   ├── CallCenter.php
    │               │   └── Call.php
    │               ├── Comparator
    │               │   ├── ClosureComparator.php
    │               │   ├── Factory.php
    │               │   └── ProphecyComparator.php
    │               ├── Doubler
    │               │   ├── CachedDoubler.php
    │               │   ├── ClassPatch
    │               │   │   ├── ClassPatchInterface.php
    │               │   │   ├── DisableConstructorPatch.php
    │               │   │   ├── HhvmExceptionPatch.php
    │               │   │   ├── KeywordPatch.php
    │               │   │   ├── MagicCallPatch.php
    │               │   │   ├── ProphecySubjectPatch.php
    │               │   │   ├── ReflectionClassNewInstancePatch.php
    │               │   │   ├── SplFileInfoPatch.php
    │               │   │   └── TraversablePatch.php
    │               │   ├── DoubleInterface.php
    │               │   ├── Doubler.php
    │               │   ├── Generator
    │               │   │   ├── ClassCodeGenerator.php
    │               │   │   ├── ClassCreator.php
    │               │   │   ├── ClassMirror.php
    │               │   │   ├── Node
    │               │   │   │   ├── ArgumentNode.php
    │               │   │   │   ├── ClassNode.php
    │               │   │   │   └── MethodNode.php
    │               │   │   └── ReflectionInterface.php
    │               │   ├── LazyDouble.php
    │               │   └── NameGenerator.php
    │               ├── Exception
    │               │   ├── Call
    │               │   │   └── UnexpectedCallException.php
    │               │   ├── Doubler
    │               │   │   ├── ClassCreatorException.php
    │               │   │   ├── ClassMirrorException.php
    │               │   │   ├── ClassNotFoundException.php
    │               │   │   ├── DoubleException.php
    │               │   │   ├── DoublerException.php
    │               │   │   ├── InterfaceNotFoundException.php
    │               │   │   ├── MethodNotExtendableException.php
    │               │   │   ├── MethodNotFoundException.php
    │               │   │   └── ReturnByReferenceException.php
    │               │   ├── Exception.php
    │               │   ├── InvalidArgumentException.php
    │               │   ├── Prediction
    │               │   │   ├── AggregateException.php
    │               │   │   ├── FailedPredictionException.php
    │               │   │   ├── NoCallsException.php
    │               │   │   ├── PredictionException.php
    │               │   │   ├── UnexpectedCallsCountException.php
    │               │   │   └── UnexpectedCallsException.php
    │               │   └── Prophecy
    │               │       ├── MethodProphecyException.php
    │               │       ├── ObjectProphecyException.php
    │               │       └── ProphecyException.php
    │               ├── PhpDocumentor
    │               │   ├── ClassAndInterfaceTagRetriever.php
    │               │   ├── ClassTagRetriever.php
    │               │   ├── LegacyClassTagRetriever.php
    │               │   └── MethodTagRetrieverInterface.php
    │               ├── Prediction
    │               │   ├── CallbackPrediction.php
    │               │   ├── CallPrediction.php
    │               │   ├── CallTimesPrediction.php
    │               │   ├── NoCallsPrediction.php
    │               │   └── PredictionInterface.php
    │               ├── Promise
    │               │   ├── CallbackPromise.php
    │               │   ├── PromiseInterface.php
    │               │   ├── ReturnArgumentPromise.php
    │               │   ├── ReturnPromise.php
    │               │   └── ThrowPromise.php
    │               ├── Prophecy
    │               │   ├── MethodProphecy.php
    │               │   ├── ObjectProphecy.php
    │               │   ├── ProphecyInterface.php
    │               │   ├── ProphecySubjectInterface.php
    │               │   ├── RevealerInterface.php
    │               │   └── Revealer.php
    │               ├── Prophet.php
    │               └── Util
    │                   ├── ExportUtil.php
    │                   └── StringUtil.php
    ├── phpunit
    │   ├── php-code-coverage
    │   │   ├── build
    │   │   │   └── phpunit.xml
    │   │   ├── build.xml
    │   │   ├── ChangeLog-2.2.md
    │   │   ├── ChangeLog-3.0.md
    │   │   ├── ChangeLog-3.1.md
    │   │   ├── ChangeLog-3.2.md
    │   │   ├── ChangeLog-3.3.md
    │   │   ├── ChangeLog-4.0.md
    │   │   ├── composer.json
    │   │   ├── CONTRIBUTING.md
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── CodeCoverage.php
    │   │   │   ├── Driver
    │   │   │   │   ├── Driver.php
    │   │   │   │   ├── HHVM.php
    │   │   │   │   ├── PHPDBG.php
    │   │   │   │   └── Xdebug.php
    │   │   │   ├── Exception
    │   │   │   │   ├── CoveredCodeNotExecutedException.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── InvalidArgumentException.php
    │   │   │   │   ├── MissingCoversAnnotationException.php
    │   │   │   │   ├── RuntimeException.php
    │   │   │   │   └── UnintentionallyCoveredCodeException.php
    │   │   │   ├── Filter.php
    │   │   │   ├── Node
    │   │   │   │   ├── AbstractNode.php
    │   │   │   │   ├── Builder.php
    │   │   │   │   ├── Directory.php
    │   │   │   │   ├── File.php
    │   │   │   │   └── Iterator.php
    │   │   │   ├── Report
    │   │   │   │   ├── Clover.php
    │   │   │   │   ├── Crap4j.php
    │   │   │   │   ├── Html
    │   │   │   │   │   ├── Facade.php
    │   │   │   │   │   ├── Renderer
    │   │   │   │   │   │   ├── Dashboard.php
    │   │   │   │   │   │   ├── Directory.php
    │   │   │   │   │   │   ├── File.php
    │   │   │   │   │   │   └── Template
    │   │   │   │   │   │       ├── coverage_bar.html.dist
    │   │   │   │   │   │       ├── css
    │   │   │   │   │   │       │   ├── bootstrap.min.css
    │   │   │   │   │   │       │   ├── nv.d3.min.css
    │   │   │   │   │   │       │   └── style.css
    │   │   │   │   │   │       ├── dashboard.html.dist
    │   │   │   │   │   │       ├── directory.html.dist
    │   │   │   │   │   │       ├── directory_item.html.dist
    │   │   │   │   │   │       ├── file.html.dist
    │   │   │   │   │   │       ├── file_item.html.dist
    │   │   │   │   │   │       ├── fonts
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.eot
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.svg
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.ttf
    │   │   │   │   │   │       │   ├── glyphicons-halflings-regular.woff
    │   │   │   │   │   │       │   └── glyphicons-halflings-regular.woff2
    │   │   │   │   │   │       ├── js
    │   │   │   │   │   │       │   ├── bootstrap.min.js
    │   │   │   │   │   │       │   ├── d3.min.js
    │   │   │   │   │   │       │   ├── holder.min.js
    │   │   │   │   │   │       │   ├── html5shiv.min.js
    │   │   │   │   │   │       │   ├── jquery.min.js
    │   │   │   │   │   │       │   ├── nv.d3.min.js
    │   │   │   │   │   │       │   └── respond.min.js
    │   │   │   │   │   │       └── method_item.html.dist
    │   │   │   │   │   └── Renderer.php
    │   │   │   │   ├── PHP.php
    │   │   │   │   ├── Text.php
    │   │   │   │   └── Xml
    │   │   │   │       ├── Coverage.php
    │   │   │   │       ├── Directory.php
    │   │   │   │       ├── Facade.php
    │   │   │   │       ├── File.php
    │   │   │   │       ├── Method.php
    │   │   │   │       ├── Node.php
    │   │   │   │       ├── Project.php
    │   │   │   │       ├── Report.php
    │   │   │   │       ├── Tests.php
    │   │   │   │       ├── Totals.php
    │   │   │   │       └── Unit.php
    │   │   │   └── Util.php
    │   │   └── tests
    │   │       ├── bootstrap.php
    │   │       ├── _files
    │   │       │   ├── BankAccount-clover.xml
    │   │       │   ├── BankAccount-crap4j.xml
    │   │       │   ├── BankAccount.php
    │   │       │   ├── BankAccountTest.php
    │   │       │   ├── BankAccount-text.txt
    │   │       │   ├── class-with-anonymous-function-clover.xml
    │   │       │   ├── class-with-anonymous-function-crap4j.xml
    │   │       │   ├── class-with-anonymous-function-text.txt
    │   │       │   ├── CoverageClassExtendedTest.php
    │   │       │   ├── CoverageClassTest.php
    │   │       │   ├── CoverageFunctionParenthesesTest.php
    │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageFunctionTest.php
    │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
    │   │       │   ├── CoverageMethodParenthesesTest.php
    │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageMethodTest.php
    │   │       │   ├── CoverageNoneTest.php
    │   │       │   ├── CoverageNothingTest.php
    │   │       │   ├── CoverageNotPrivateTest.php
    │   │       │   ├── CoverageNotProtectedTest.php
    │   │       │   ├── CoverageNotPublicTest.php
    │   │       │   ├── CoveragePrivateTest.php
    │   │       │   ├── CoverageProtectedTest.php
    │   │       │   ├── CoveragePublicTest.php
    │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
    │   │       │   ├── CoveredClass.php
    │   │       │   ├── CoveredFunction.php
    │   │       │   ├── ignored-lines-clover.xml
    │   │       │   ├── ignored-lines-crap4j.xml
    │   │       │   ├── ignored-lines-text.txt
    │   │       │   ├── NamespaceCoverageClassExtendedTest.php
    │   │       │   ├── NamespaceCoverageClassTest.php
    │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
    │   │       │   ├── NamespaceCoverageCoversClassTest.php
    │   │       │   ├── NamespaceCoverageMethodTest.php
    │   │       │   ├── NamespaceCoverageNotPrivateTest.php
    │   │       │   ├── NamespaceCoverageNotProtectedTest.php
    │   │       │   ├── NamespaceCoverageNotPublicTest.php
    │   │       │   ├── NamespaceCoveragePrivateTest.php
    │   │       │   ├── NamespaceCoverageProtectedTest.php
    │   │       │   ├── NamespaceCoveragePublicTest.php
    │   │       │   ├── NamespaceCoveredClass.php
    │   │       │   ├── NotExistingCoveredElementTest.php
    │   │       │   ├── Report
    │   │       │   │   ├── HTML
    │   │       │   │   │   ├── CoverageForBankAccount
    │   │       │   │   │   │   ├── BankAccount.php.html
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   └── index.html
    │   │       │   │   │   ├── CoverageForClassWithAnonymousFunction
    │   │       │   │   │   │   ├── dashboard.html
    │   │       │   │   │   │   ├── index.html
    │   │       │   │   │   │   └── source_with_class_and_anonymous_function.php.html
    │   │       │   │   │   └── CoverageForFileWithIgnoredLines
    │   │       │   │   │       ├── dashboard.html
    │   │       │   │   │       ├── index.html
    │   │       │   │   │       └── source_with_ignore.php.html
    │   │       │   │   └── XML
    │   │       │   │       ├── CoverageForBankAccount
    │   │       │   │       │   ├── BankAccount.php.xml
    │   │       │   │       │   └── index.xml
    │   │       │   │       ├── CoverageForClassWithAnonymousFunction
    │   │       │   │       │   ├── index.xml
    │   │       │   │       │   └── source_with_class_and_anonymous_function.php.xml
    │   │       │   │       └── CoverageForFileWithIgnoredLines
    │   │       │   │           ├── index.xml
    │   │       │   │           └── source_with_ignore.php.xml
    │   │       │   ├── source_with_class_and_anonymous_function.php
    │   │       │   ├── source_with_ignore.php
    │   │       │   ├── source_with_namespace.php
    │   │       │   ├── source_with_oneline_annotations.php
    │   │       │   ├── source_without_ignore.php
    │   │       │   └── source_without_namespace.php
    │   │       ├── TestCase.php
    │   │       └── tests
    │   │           ├── BuilderTest.php
    │   │           ├── CloverTest.php
    │   │           ├── CodeCoverageTest.php
    │   │           ├── Crap4jTest.php
    │   │           ├── FilterTest.php
    │   │           ├── HTMLTest.php
    │   │           ├── TextTest.php
    │   │           ├── UtilTest.php
    │   │           └── XMLTest.php
    │   ├── php-file-iterator
    │   │   ├── ChangeLog.md
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       ├── Facade.php
    │   │       ├── Factory.php
    │   │       └── Iterator.php
    │   ├── php-text-template
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       └── Template.php
    │   ├── php-timer
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   └── Timer.php
    │   │   └── tests
    │   │       └── TimerTest.php
    │   ├── php-token-stream
    │   │   ├── build
    │   │   │   └── phpunit.xml
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Token
    │   │   │   │   ├── Stream
    │   │   │   │   │   └── CachingFactory.php
    │   │   │   │   └── Stream.php
    │   │   │   └── Token.php
    │   │   └── tests
    │   │       ├── bootstrap.php
    │   │       ├── _fixture
    │   │       │   ├── classExtendsNamespacedClass.php
    │   │       │   ├── classInNamespace.php
    │   │       │   ├── classInScopedNamespace.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class2.php
    │   │       │   ├── class_with_method_that_declares_anonymous_class.php
    │   │       │   ├── closure.php
    │   │       │   ├── issue19.php
    │   │       │   ├── issue30.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingBraces.php
    │   │       │   ├── multipleNamespacesWithOneClassUsingNonBraceSyntax.php
    │   │       │   ├── source2.php
    │   │       │   ├── source3.php
    │   │       │   ├── source4.php
    │   │       │   ├── source5.php
    │   │       │   └── source.php
    │   │       ├── Token
    │   │       │   ├── ClassTest.php
    │   │       │   ├── ClosureTest.php
    │   │       │   ├── FunctionTest.php
    │   │       │   ├── IncludeTest.php
    │   │       │   ├── InterfaceTest.php
    │   │       │   └── NamespaceTest.php
    │   │       └── TokenTest.php
    │   ├── phpunit
    │   │   ├── build.xml
    │   │   ├── ChangeLog-4.0.md
    │   │   ├── ChangeLog-4.1.md
    │   │   ├── ChangeLog-4.2.md
    │   │   ├── ChangeLog-4.3.md
    │   │   ├── ChangeLog-4.4.md
    │   │   ├── ChangeLog-4.5.md
    │   │   ├── ChangeLog-4.6.md
    │   │   ├── ChangeLog-4.7.md
    │   │   ├── ChangeLog-4.8.md
    │   │   ├── ChangeLog-5.0.md
    │   │   ├── ChangeLog-5.1.md
    │   │   ├── ChangeLog-5.2.md
    │   │   ├── ChangeLog-5.3.md
    │   │   ├── ChangeLog-5.4.md
    │   │   ├── ChangeLog-5.5.md
    │   │   ├── CODE_OF_CONDUCT.md
    │   │   ├── composer.json
    │   │   ├── CONTRIBUTING.md
    │   │   ├── LICENSE
    │   │   ├── phpunit
    │   │   ├── phpunit.xml
    │   │   ├── phpunit.xsd
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Exception.php
    │   │   │   ├── Extensions
    │   │   │   │   ├── GroupTestSuite.php
    │   │   │   │   ├── PhptTestCase.php
    │   │   │   │   ├── PhptTestSuite.php
    │   │   │   │   ├── RepeatedTest.php
    │   │   │   │   ├── TestDecorator.php
    │   │   │   │   └── TicketListener.php
    │   │   │   ├── ForwardCompatibility
    │   │   │   │   └── TestCase.php
    │   │   │   ├── Framework
    │   │   │   │   ├── Assert
    │   │   │   │   │   └── Functions.php
    │   │   │   │   ├── AssertionFailedError.php
    │   │   │   │   ├── Assert.php
    │   │   │   │   ├── BaseTestListener.php
    │   │   │   │   ├── CodeCoverageException.php
    │   │   │   │   ├── Constraint
    │   │   │   │   │   ├── And.php
    │   │   │   │   │   ├── ArrayHasKey.php
    │   │   │   │   │   ├── ArraySubset.php
    │   │   │   │   │   ├── Attribute.php
    │   │   │   │   │   ├── Callback.php
    │   │   │   │   │   ├── ClassHasAttribute.php
    │   │   │   │   │   ├── ClassHasStaticAttribute.php
    │   │   │   │   │   ├── Composite.php
    │   │   │   │   │   ├── Count.php
    │   │   │   │   │   ├── ExceptionCode.php
    │   │   │   │   │   ├── ExceptionMessage.php
    │   │   │   │   │   ├── ExceptionMessageRegExp.php
    │   │   │   │   │   ├── Exception.php
    │   │   │   │   │   ├── FileExists.php
    │   │   │   │   │   ├── GreaterThan.php
    │   │   │   │   │   ├── IsAnything.php
    │   │   │   │   │   ├── IsEmpty.php
    │   │   │   │   │   ├── IsEqual.php
    │   │   │   │   │   ├── IsFalse.php
    │   │   │   │   │   ├── IsFinite.php
    │   │   │   │   │   ├── IsIdentical.php
    │   │   │   │   │   ├── IsInfinite.php
    │   │   │   │   │   ├── IsInstanceOf.php
    │   │   │   │   │   ├── IsJson.php
    │   │   │   │   │   ├── IsNan.php
    │   │   │   │   │   ├── IsNull.php
    │   │   │   │   │   ├── IsTrue.php
    │   │   │   │   │   ├── IsType.php
    │   │   │   │   │   ├── JsonMatches
    │   │   │   │   │   │   └── ErrorMessageProvider.php
    │   │   │   │   │   ├── JsonMatches.php
    │   │   │   │   │   ├── LessThan.php
    │   │   │   │   │   ├── Not.php
    │   │   │   │   │   ├── ObjectHasAttribute.php
    │   │   │   │   │   ├── Or.php
    │   │   │   │   │   ├── PCREMatch.php
    │   │   │   │   │   ├── SameSize.php
    │   │   │   │   │   ├── StringContains.php
    │   │   │   │   │   ├── StringEndsWith.php
    │   │   │   │   │   ├── StringMatches.php
    │   │   │   │   │   ├── StringStartsWith.php
    │   │   │   │   │   ├── TraversableContainsOnly.php
    │   │   │   │   │   ├── TraversableContains.php
    │   │   │   │   │   └── Xor.php
    │   │   │   │   ├── Constraint.php
    │   │   │   │   ├── Error
    │   │   │   │   │   ├── Deprecated.php
    │   │   │   │   │   ├── Notice.php
    │   │   │   │   │   └── Warning.php
    │   │   │   │   ├── Error.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── ExceptionWrapper.php
    │   │   │   │   ├── ExpectationFailedException.php
    │   │   │   │   ├── IncompleteTestCase.php
    │   │   │   │   ├── IncompleteTestError.php
    │   │   │   │   ├── IncompleteTest.php
    │   │   │   │   ├── InvalidCoversTargetException.php
    │   │   │   │   ├── OutputError.php
    │   │   │   │   ├── PHPUnit_Framework_CoveredCodeNotExecutedException.php
    │   │   │   │   ├── PHPUnit_Framework_MissingCoversAnnotationException.php
    │   │   │   │   ├── RiskyTestError.php
    │   │   │   │   ├── RiskyTest.php
    │   │   │   │   ├── SelfDescribing.php
    │   │   │   │   ├── SkippedTestCase.php
    │   │   │   │   ├── SkippedTestError.php
    │   │   │   │   ├── SkippedTest.php
    │   │   │   │   ├── SkippedTestSuiteError.php
    │   │   │   │   ├── SyntheticError.php
    │   │   │   │   ├── TestCase.php
    │   │   │   │   ├── TestFailure.php
    │   │   │   │   ├── TestListener.php
    │   │   │   │   ├── Test.php
    │   │   │   │   ├── TestResult.php
    │   │   │   │   ├── TestSuite
    │   │   │   │   │   └── DataProvider.php
    │   │   │   │   ├── TestSuite.php
    │   │   │   │   ├── UnintentionallyCoveredCodeError.php
    │   │   │   │   ├── Warning.php
    │   │   │   │   └── WarningTestCase.php
    │   │   │   ├── Runner
    │   │   │   │   ├── BaseTestRunner.php
    │   │   │   │   ├── Exception.php
    │   │   │   │   ├── Filter
    │   │   │   │   │   ├── Factory.php
    │   │   │   │   │   ├── Group
    │   │   │   │   │   │   ├── Exclude.php
    │   │   │   │   │   │   └── Include.php
    │   │   │   │   │   ├── Group.php
    │   │   │   │   │   └── Test.php
    │   │   │   │   ├── StandardTestSuiteLoader.php
    │   │   │   │   ├── TestSuiteLoader.php
    │   │   │   │   └── Version.php
    │   │   │   ├── TextUI
    │   │   │   │   ├── Command.php
    │   │   │   │   ├── ResultPrinter.php
    │   │   │   │   └── TestRunner.php
    │   │   │   └── Util
    │   │   │       ├── Blacklist.php
    │   │   │       ├── ConfigurationGenerator.php
    │   │   │       ├── Configuration.php
    │   │   │       ├── ErrorHandler.php
    │   │   │       ├── Fileloader.php
    │   │   │       ├── Filesystem.php
    │   │   │       ├── Filter.php
    │   │   │       ├── Getopt.php
    │   │   │       ├── GlobalState.php
    │   │   │       ├── InvalidArgumentHelper.php
    │   │   │       ├── Log
    │   │   │       │   ├── JSON.php
    │   │   │       │   ├── JUnit.php
    │   │   │       │   ├── TAP.php
    │   │   │       │   └── TeamCity.php
    │   │   │       ├── PHP
    │   │   │       │   ├── Default.php
    │   │   │       │   ├── eval-stdin.php
    │   │   │       │   ├── Template
    │   │   │       │   │   └── TestCaseMethod.tpl.dist
    │   │   │       │   └── Windows.php
    │   │   │       ├── PHP.php
    │   │   │       ├── Printer.php
    │   │   │       ├── Regex.php
    │   │   │       ├── String.php
    │   │   │       ├── TestDox
    │   │   │       │   ├── NamePrettifier.php
    │   │   │       │   ├── ResultPrinter
    │   │   │       │   │   ├── HTML.php
    │   │   │       │   │   ├── Text.php
    │   │   │       │   │   └── XML.php
    │   │   │       │   └── ResultPrinter.php
    │   │   │       ├── Test.php
    │   │   │       ├── TestSuiteIterator.php
    │   │   │       ├── Type.php
    │   │   │       └── XML.php
    │   │   └── tests
    │   │       ├── bootstrap.php
    │   │       ├── Extensions
    │   │       │   ├── PhptTestCaseTest.php
    │   │       │   └── RepeatedTestTest.php
    │   │       ├── Fail
    │   │       │   └── fail.phpt
    │   │       ├── _files
    │   │       │   ├── AbstractTest.php
    │   │       │   ├── AssertionExample.php
    │   │       │   ├── AssertionExampleTest.php
    │   │       │   ├── Author.php
    │   │       │   ├── BankAccount.php
    │   │       │   ├── BankAccountTest2.php
    │   │       │   ├── BankAccountTest.php
    │   │       │   ├── BankAccountTest.test.php
    │   │       │   ├── bar.xml
    │   │       │   ├── BaseTestListenerSample.php
    │   │       │   ├── BeforeAndAfterTest.php
    │   │       │   ├── BeforeClassAndAfterClassTest.php
    │   │       │   ├── BeforeClassWithOnlyDataProviderTest.php
    │   │       │   ├── Book.php
    │   │       │   ├── Calculator.php
    │   │       │   ├── ChangeCurrentWorkingDirectoryTest.php
    │   │       │   ├── ClassWithNonPublicAttributes.php
    │   │       │   ├── ClassWithScalarTypeDeclarations.php
    │   │       │   ├── ClassWithToString.php
    │   │       │   ├── ClonedDependencyTest.php
    │   │       │   ├── ConcreteTest.my.php
    │   │       │   ├── ConcreteTest.php
    │   │       │   ├── configuration.colors.empty.xml
    │   │       │   ├── configuration.colors.false.xml
    │   │       │   ├── configuration.colors.invalid.xml
    │   │       │   ├── configuration.colors.true.xml
    │   │       │   ├── configuration.custom-printer.xml
    │   │       │   ├── configuration_empty.xml
    │   │       │   ├── configuration_stop_on_warning.xml
    │   │       │   ├── configuration.suites.xml
    │   │       │   ├── configuration_xinclude.xml
    │   │       │   ├── configuration.xml
    │   │       │   ├── CoverageClassExtendedTest.php
    │   │       │   ├── CoverageClassTest.php
    │   │       │   ├── CoverageFunctionParenthesesTest.php
    │   │       │   ├── CoverageFunctionParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageFunctionTest.php
    │   │       │   ├── CoverageMethodOneLineAnnotationTest.php
    │   │       │   ├── CoverageMethodParenthesesTest.php
    │   │       │   ├── CoverageMethodParenthesesWhitespaceTest.php
    │   │       │   ├── CoverageMethodTest.php
    │   │       │   ├── CoverageNamespacedFunctionTest.php
    │   │       │   ├── CoverageNoneTest.php
    │   │       │   ├── CoverageNothingTest.php
    │   │       │   ├── CoverageNotPrivateTest.php
    │   │       │   ├── CoverageNotProtectedTest.php
    │   │       │   ├── CoverageNotPublicTest.php
    │   │       │   ├── CoveragePrivateTest.php
    │   │       │   ├── CoverageProtectedTest.php
    │   │       │   ├── CoveragePublicTest.php
    │   │       │   ├── CoverageTwoDefaultClassAnnotations.php
    │   │       │   ├── CoveredClass.php
    │   │       │   ├── CoveredFunction.php
    │   │       │   ├── CustomPrinter.php
    │   │       │   ├── DataProviderDebugTest.php
    │   │       │   ├── DataProviderFilterTest.php
    │   │       │   ├── DataProviderIncompleteTest.php
    │   │       │   ├── DataProviderSkippedTest.php
    │   │       │   ├── DataProviderTestDoxTest.php
    │   │       │   ├── DataProviderTest.php
    │   │       │   ├── DependencyFailureTest.php
    │   │       │   ├── DependencySuccessTest.php
    │   │       │   ├── DependencyTestSuite.php
    │   │       │   ├── DoubleTestCase.php
    │   │       │   ├── DummyException.php
    │   │       │   ├── EmptyTestCaseTest.php
    │   │       │   ├── ExceptionInAssertPostConditionsTest.php
    │   │       │   ├── ExceptionInAssertPreConditionsTest.php
    │   │       │   ├── ExceptionInSetUpTest.php
    │   │       │   ├── ExceptionInTearDownTest.php
    │   │       │   ├── ExceptionInTest.php
    │   │       │   ├── ExceptionNamespaceTest.php
    │   │       │   ├── ExceptionStackTest.php
    │   │       │   ├── ExceptionTest.php
    │   │       │   ├── expectedFileFormat.txt
    │   │       │   ├── Failure.php
    │   │       │   ├── FailureTest.php
    │   │       │   ├── FatalTest.php
    │   │       │   ├── foo.xml
    │   │       │   ├── IgnoreCodeCoverageClass.php
    │   │       │   ├── IgnoreCodeCoverageClassTest.php
    │   │       │   ├── IncompleteTest.php
    │   │       │   ├── Inheritance
    │   │       │   │   ├── InheritanceA.php
    │   │       │   │   └── InheritanceB.php
    │   │       │   ├── InheritedTestCase.php
    │   │       │   ├── IniTest.php
    │   │       │   ├── IsolationTest.php
    │   │       │   ├── JsonData
    │   │       │   │   ├── arrayObject.json
    │   │       │   │   └── simpleObject.json
    │   │       │   ├── Mockable.php
    │   │       │   ├── MockRunner.php
    │   │       │   ├── MultiDependencyTest.php
    │   │       │   ├── NamespaceCoverageClassExtendedTest.php
    │   │       │   ├── NamespaceCoverageClassTest.php
    │   │       │   ├── NamespaceCoverageCoversClassPublicTest.php
    │   │       │   ├── NamespaceCoverageCoversClassTest.php
    │   │       │   ├── NamespaceCoverageMethodTest.php
    │   │       │   ├── NamespaceCoverageNotPrivateTest.php
    │   │       │   ├── NamespaceCoverageNotProtectedTest.php
    │   │       │   ├── NamespaceCoverageNotPublicTest.php
    │   │       │   ├── NamespaceCoveragePrivateTest.php
    │   │       │   ├── NamespaceCoverageProtectedTest.php
    │   │       │   ├── NamespaceCoveragePublicTest.php
    │   │       │   ├── NamespaceCoveredClass.php
    │   │       │   ├── NamespaceCoveredFunction.php
    │   │       │   ├── NoArgTestCaseTest.php
    │   │       │   ├── NonStatic.php
    │   │       │   ├── NoTestCaseClass.php
    │   │       │   ├── NoTestCases.php
    │   │       │   ├── NotExistingCoveredElementTest.php
    │   │       │   ├── NothingTest.php
    │   │       │   ├── NotPublicTestCase.php
    │   │       │   ├── NotVoidTestCase.php
    │   │       │   ├── OneTestCase.php
    │   │       │   ├── OutputTestCase.php
    │   │       │   ├── OverrideTestCase.php
    │   │       │   ├── phpt-for-coverage.phpt
    │   │       │   ├── phpt-xfail.phpt
    │   │       │   ├── RequirementsClassBeforeClassHookTest.php
    │   │       │   ├── RequirementsClassDocBlockTest.php
    │   │       │   ├── RequirementsTest.php
    │   │       │   ├── SampleArrayAccess.php
    │   │       │   ├── SampleClass.php
    │   │       │   ├── Singleton.php
    │   │       │   ├── StackTest.php
    │   │       │   ├── StopOnWarningTestSuite.php
    │   │       │   ├── StopsOnWarningTest.php
    │   │       │   ├── Struct.php
    │   │       │   ├── structureAttributesAreSameButValuesAreNot.xml
    │   │       │   ├── structureExpected.xml
    │   │       │   ├── structureIgnoreTextNodes.xml
    │   │       │   ├── structureIsSameButDataIsNot.xml
    │   │       │   ├── structureWrongNumberOfAttributes.xml
    │   │       │   ├── structureWrongNumberOfNodes.xml
    │   │       │   ├── Success.php
    │   │       │   ├── TemplateMethodsTest.php
    │   │       │   ├── TestDoxGroupTest.php
    │   │       │   ├── TestIncomplete.php
    │   │       │   ├── TestIterator2.php
    │   │       │   ├── TestIterator.php
    │   │       │   ├── TestSkipped.php
    │   │       │   ├── TestTestError.php
    │   │       │   ├── TestWithTest.php
    │   │       │   ├── ThrowExceptionTestCase.php
    │   │       │   ├── ThrowNoExceptionTestCase.php
    │   │       │   └── WasRun.php
    │   │       ├── Framework
    │   │       │   ├── AssertTest.php
    │   │       │   ├── BaseTestListenerTest.php
    │   │       │   ├── Constraint
    │   │       │   │   ├── CountTest.php
    │   │       │   │   ├── ExceptionMessageRegExpTest.php
    │   │       │   │   ├── ExceptionMessageTest.php
    │   │       │   │   ├── IsJsonTest.php
    │   │       │   │   ├── JsonMatches
    │   │       │   │   │   └── ErrorMessageProviderTest.php
    │   │       │   │   └── JsonMatchesTest.php
    │   │       │   ├── ConstraintTest.php
    │   │       │   ├── SuiteTest.php
    │   │       │   ├── TestCaseTest.php
    │   │       │   ├── TestFailureTest.php
    │   │       │   ├── TestImplementorTest.php
    │   │       │   └── TestListenerTest.php
    │   │       ├── Regression
    │   │       │   ├── GitHub
    │   │       │   │   ├── 1149
    │   │       │   │   │   └── Issue1149Test.php
    │   │       │   │   ├── 1149.phpt
    │   │       │   │   ├── 1216
    │   │       │   │   │   ├── bootstrap1216.php
    │   │       │   │   │   ├── Issue1216Test.php
    │   │       │   │   │   └── phpunit1216.xml
    │   │       │   │   ├── 1216.phpt
    │   │       │   │   ├── 1265
    │   │       │   │   │   ├── Issue1265Test.php
    │   │       │   │   │   └── phpunit1265.xml
    │   │       │   │   ├── 1265.phpt
    │   │       │   │   ├── 1330
    │   │       │   │   │   ├── Issue1330Test.php
    │   │       │   │   │   └── phpunit1330.xml
    │   │       │   │   ├── 1330.phpt
    │   │       │   │   ├── 1335
    │   │       │   │   │   ├── bootstrap1335.php
    │   │       │   │   │   └── Issue1335Test.php
    │   │       │   │   ├── 1335.phpt
    │   │       │   │   ├── 1337
    │   │       │   │   │   └── Issue1337Test.php
    │   │       │   │   ├── 1337.phpt
    │   │       │   │   ├── 1348
    │   │       │   │   │   └── Issue1348Test.php
    │   │       │   │   ├── 1348.phpt
    │   │       │   │   ├── 1351
    │   │       │   │   │   ├── ChildProcessClass1351.php
    │   │       │   │   │   └── Issue1351Test.php
    │   │       │   │   ├── 1351.phpt
    │   │       │   │   ├── 1374
    │   │       │   │   │   └── Issue1374Test.php
    │   │       │   │   ├── 1374.phpt
    │   │       │   │   ├── 1437
    │   │       │   │   │   └── Issue1437Test.php
    │   │       │   │   ├── 1437.phpt
    │   │       │   │   ├── 1468
    │   │       │   │   │   └── Issue1468Test.php
    │   │       │   │   ├── 1468.phpt
    │   │       │   │   ├── 1471
    │   │       │   │   │   └── Issue1471Test.php
    │   │       │   │   ├── 1471.phpt
    │   │       │   │   ├── 1472
    │   │       │   │   │   └── Issue1472Test.php
    │   │       │   │   ├── 1472.phpt
    │   │       │   │   ├── 1570
    │   │       │   │   │   └── Issue1570Test.php
    │   │       │   │   ├── 1570.phpt
    │   │       │   │   ├── 2158
    │   │       │   │   │   ├── constant.inc
    │   │       │   │   │   └── Issue2158Test.php
    │   │       │   │   ├── 2158.phpt
    │   │       │   │   ├── 244
    │   │       │   │   │   └── Issue244Test.php
    │   │       │   │   ├── 244.phpt
    │   │       │   │   ├── 322
    │   │       │   │   │   ├── Issue322Test.php
    │   │       │   │   │   └── phpunit322.xml
    │   │       │   │   ├── 322.phpt
    │   │       │   │   ├── 433
    │   │       │   │   │   └── Issue433Test.php
    │   │       │   │   ├── 433.phpt
    │   │       │   │   ├── 445
    │   │       │   │   │   └── Issue445Test.php
    │   │       │   │   ├── 445.phpt
    │   │       │   │   ├── 498
    │   │       │   │   │   └── Issue498Test.php
    │   │       │   │   ├── 498.phpt
    │   │       │   │   ├── 503
    │   │       │   │   │   └── Issue503Test.php
    │   │       │   │   ├── 503.phpt
    │   │       │   │   ├── 581
    │   │       │   │   │   └── Issue581Test.php
    │   │       │   │   ├── 581.phpt
    │   │       │   │   ├── 74
    │   │       │   │   │   ├── Issue74Test.php
    │   │       │   │   │   └── NewException.php
    │   │       │   │   ├── 74.phpt
    │   │       │   │   ├── 765
    │   │       │   │   │   └── Issue765Test.php
    │   │       │   │   ├── 765.phpt
    │   │       │   │   ├── 797
    │   │       │   │   │   ├── bootstrap797.php
    │   │       │   │   │   └── Issue797Test.php
    │   │       │   │   ├── 797.phpt
    │   │       │   │   ├── 863.phpt
    │   │       │   │   ├── 873
    │   │       │   │   │   └── Issue873Test.php
    │   │       │   │   ├── 873-php5.phpt
    │   │       │   │   └── 873-php7.phpt
    │   │       │   └── Trac
    │   │       │       ├── 1021
    │   │       │       │   └── Issue1021Test.php
    │   │       │       ├── 1021.phpt
    │   │       │       ├── 523
    │   │       │       │   └── Issue523Test.php
    │   │       │       ├── 523.phpt
    │   │       │       ├── 578
    │   │       │       │   └── Issue578Test.php
    │   │       │       ├── 578.phpt
    │   │       │       ├── 684
    │   │       │       │   └── Issue684Test.php
    │   │       │       ├── 684.phpt
    │   │       │       ├── 783
    │   │       │       │   ├── ChildSuite.php
    │   │       │       │   ├── OneTest.php
    │   │       │       │   ├── ParentSuite.php
    │   │       │       │   └── TwoTest.php
    │   │       │       └── 783.phpt
    │   │       ├── Runner
    │   │       │   └── BaseTestRunnerTest.php
    │   │       ├── TextUI
    │   │       │   ├── abstract-test-class.phpt
    │   │       │   ├── assertion.phpt
    │   │       │   ├── code-coverage-ignore.phpt
    │   │       │   ├── colors-always.phpt
    │   │       │   ├── concrete-test-class.phpt
    │   │       │   ├── custom-printer-debug.phpt
    │   │       │   ├── custom-printer-verbose.phpt
    │   │       │   ├── dataprovider-debug.phpt
    │   │       │   ├── dataprovider-log-xml-isolation.phpt
    │   │       │   ├── dataprovider-log-xml.phpt
    │   │       │   ├── dataprovider-testdox.phpt
    │   │       │   ├── debug.phpt
    │   │       │   ├── default-isolation.phpt
    │   │       │   ├── default.phpt
    │   │       │   ├── dependencies2-isolation.phpt
    │   │       │   ├── dependencies2.phpt
    │   │       │   ├── dependencies3-isolation.phpt
    │   │       │   ├── dependencies3.phpt
    │   │       │   ├── dependencies-clone.phpt
    │   │       │   ├── dependencies-isolation.phpt
    │   │       │   ├── dependencies.phpt
    │   │       │   ├── disable-code-coverage-ignore.phpt
    │   │       │   ├── empty-testcase.phpt
    │   │       │   ├── exception-stack.phpt
    │   │       │   ├── exclude-group-isolation.phpt
    │   │       │   ├── exclude-group.phpt
    │   │       │   ├── failure-isolation.phpt
    │   │       │   ├── failure.phpt
    │   │       │   ├── failure-reverse-list.phpt
    │   │       │   ├── fatal-isolation.phpt
    │   │       │   ├── _files
    │   │       │   │   ├── expect_external.txt
    │   │       │   │   ├── phpt-env.expected.txt
    │   │       │   │   └── phpt_external.php
    │   │       │   ├── filter-class-isolation.phpt
    │   │       │   ├── filter-class.phpt
    │   │       │   ├── filter-dataprovider-by-classname-and-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-classname-and-range.phpt
    │   │       │   ├── filter-dataprovider-by-number-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-number.phpt
    │   │       │   ├── filter-dataprovider-by-only-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-range.phpt
    │   │       │   ├── filter-dataprovider-by-only-regexp-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-regexp.phpt
    │   │       │   ├── filter-dataprovider-by-only-string-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-only-string.phpt
    │   │       │   ├── filter-dataprovider-by-range-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-range.phpt
    │   │       │   ├── filter-dataprovider-by-regexp-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-regexp.phpt
    │   │       │   ├── filter-dataprovider-by-string-isolation.phpt
    │   │       │   ├── filter-dataprovider-by-string.phpt
    │   │       │   ├── filter-method-case-insensitive.phpt
    │   │       │   ├── filter-method-case-sensitive-no-result.phpt
    │   │       │   ├── filter-method-isolation.phpt
    │   │       │   ├── filter-method.phpt
    │   │       │   ├── filter-no-results.phpt
    │   │       │   ├── forward-compatibility.phpt
    │   │       │   ├── group-isolation.phpt
    │   │       │   ├── group.phpt
    │   │       │   ├── help2.phpt
    │   │       │   ├── help.phpt
    │   │       │   ├── ini-isolation.phpt
    │   │       │   ├── list-groups.phpt
    │   │       │   ├── list-suites.phpt
    │   │       │   ├── log-json-post-66021.phpt
    │   │       │   ├── log-tap.phpt
    │   │       │   ├── log-teamcity.phpt
    │   │       │   ├── log-xml.phpt
    │   │       │   ├── options-after-arguments.phpt
    │   │       │   ├── output-isolation.phpt
    │   │       │   ├── phpt-args.phpt
    │   │       │   ├── phpt-env.phpt
    │   │       │   ├── phpt-external.phpt
    │   │       │   ├── phpt-stderr.phpt
    │   │       │   ├── phpt-stdin.phpt
    │   │       │   ├── phpt-xfail.phpt
    │   │       │   ├── repeat.phpt
    │   │       │   ├── report-useless-tests-incomplete.phpt
    │   │       │   ├── report-useless-tests-isolation.phpt
    │   │       │   ├── report-useless-tests.phpt
    │   │       │   ├── stop-on-warning-via-cli.phpt
    │   │       │   ├── stop-on-warning-via-config.phpt
    │   │       │   ├── tap.phpt
    │   │       │   ├── teamcity.phpt
    │   │       │   ├── testdox-exclude-group.phpt
    │   │       │   ├── testdox-group.phpt
    │   │       │   ├── testdox-html.phpt
    │   │       │   ├── testdox.phpt
    │   │       │   ├── testdox-text.phpt
    │   │       │   ├── testdox-xml.phpt
    │   │       │   ├── test-suffix-multiple.phpt
    │   │       │   └── test-suffix-single.phpt
    │   │       └── Util
    │   │           ├── ConfigurationTest.php
    │   │           ├── GetoptTest.php
    │   │           ├── GlobalStateTest.php
    │   │           ├── PHPTest.php
    │   │           ├── RegexTest.php
    │   │           ├── TestDox
    │   │           │   └── NamePrettifierTest.php
    │   │           ├── TestTest.php
    │   │           └── XMLTest.php
    │   └── phpunit-mock-objects
    │       ├── build
    │       │   └── travis-ci.xml
    │       ├── build.xml
    │       ├── composer.json
    │       ├── CONTRIBUTING.md
    │       ├── LICENSE
    │       ├── phpunit.xml.dist
    │       ├── README.md
    │       ├── src
    │       │   └── Framework
    │       │       └── MockObject
    │       │           ├── Builder
    │       │           │   ├── Identity.php
    │       │           │   ├── InvocationMocker.php
    │       │           │   ├── Match.php
    │       │           │   ├── MethodNameMatch.php
    │       │           │   ├── Namespace.php
    │       │           │   ├── ParametersMatch.php
    │       │           │   └── Stub.php
    │       │           ├── Exception
    │       │           │   ├── BadMethodCallException.php
    │       │           │   ├── Exception.php
    │       │           │   └── RuntimeException.php
    │       │           ├── Generator
    │       │           │   ├── deprecation.tpl.dist
    │       │           │   ├── mocked_class_method.tpl.dist
    │       │           │   ├── mocked_class.tpl.dist
    │       │           │   ├── mocked_clone.tpl.dist
    │       │           │   ├── mocked_method.tpl.dist
    │       │           │   ├── mocked_static_method.tpl.dist
    │       │           │   ├── proxied_method.tpl.dist
    │       │           │   ├── trait_class.tpl.dist
    │       │           │   ├── unmocked_clone.tpl.dist
    │       │           │   ├── wsdl_class.tpl.dist
    │       │           │   └── wsdl_method.tpl.dist
    │       │           ├── Generator.php
    │       │           ├── Invocation
    │       │           │   ├── Object.php
    │       │           │   └── Static.php
    │       │           ├── InvocationMocker.php
    │       │           ├── Invocation.php
    │       │           ├── Invokable.php
    │       │           ├── Matcher
    │       │           │   ├── AnyInvokedCount.php
    │       │           │   ├── AnyParameters.php
    │       │           │   ├── ConsecutiveParameters.php
    │       │           │   ├── Invocation.php
    │       │           │   ├── InvokedAtIndex.php
    │       │           │   ├── InvokedAtLeastCount.php
    │       │           │   ├── InvokedAtLeastOnce.php
    │       │           │   ├── InvokedAtMostCount.php
    │       │           │   ├── InvokedCount.php
    │       │           │   ├── InvokedRecorder.php
    │       │           │   ├── MethodName.php
    │       │           │   ├── Parameters.php
    │       │           │   └── StatelessInvocation.php
    │       │           ├── Matcher.php
    │       │           ├── MockBuilder.php
    │       │           ├── MockObject.php
    │       │           ├── Stub
    │       │           │   ├── ConsecutiveCalls.php
    │       │           │   ├── Exception.php
    │       │           │   ├── MatcherCollection.php
    │       │           │   ├── ReturnArgument.php
    │       │           │   ├── ReturnCallback.php
    │       │           │   ├── Return.php
    │       │           │   ├── ReturnReference.php
    │       │           │   ├── ReturnSelf.php
    │       │           │   └── ReturnValueMap.php
    │       │           ├── Stub.php
    │       │           └── Verifiable.php
    │       └── tests
    │           ├── bootstrap.php
    │           ├── _fixture
    │           │   ├── AbstractMockTestClass.php
    │           │   ├── AbstractTrait.php
    │           │   ├── AnInterface.php
    │           │   ├── AnotherInterface.php
    │           │   ├── Bar.php
    │           │   ├── ClassThatImplementsSerializable.php
    │           │   ├── ClassWithSelfTypeHint.php
    │           │   ├── ClassWithStaticMethod.php
    │           │   ├── Foo.php
    │           │   ├── FunctionCallback.php
    │           │   ├── GoogleSearch.wsdl
    │           │   ├── InterfaceWithSemiReservedMethodName.php
    │           │   ├── InterfaceWithStaticMethod.php
    │           │   ├── MethodCallbackByReference.php
    │           │   ├── MethodCallback.php
    │           │   ├── Mockable.php
    │           │   ├── MockTestInterface.php
    │           │   ├── PartialMockTestClass.php
    │           │   ├── SingletonClass.php
    │           │   ├── SomeClass.php
    │           │   ├── StaticMockTestClass.php
    │           │   ├── StringableClass.php
    │           │   └── TraversableMockTestInterface.php
    │           ├── GeneratorTest.php
    │           ├── MockBuilderTest.php
    │           ├── MockObject
    │           │   ├── Builder
    │           │   │   └── InvocationMockerTest.php
    │           │   ├── class_with_deprecated_method.phpt
    │           │   ├── Generator
    │           │   │   ├── 232.phpt
    │           │   │   ├── abstract_class.phpt
    │           │   │   ├── class_call_parent_clone.phpt
    │           │   │   ├── class_call_parent_constructor.phpt
    │           │   │   ├── class_dont_call_parent_clone.phpt
    │           │   │   ├── class_dont_call_parent_constructor.phpt
    │           │   │   ├── class_implementing_interface_call_parent_constructor.phpt
    │           │   │   ├── class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   ├── class_partial.phpt
    │           │   │   ├── class.phpt
    │           │   │   ├── class_with_method_named_method.phpt
    │           │   │   ├── class_with_method_with_variadic_arguments.phpt
    │           │   │   ├── interface.phpt
    │           │   │   ├── invocation_object_clone_object.phpt
    │           │   │   ├── namespaced_class_call_parent_clone.phpt
    │           │   │   ├── namespaced_class_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_dont_call_parent_clone.phpt
    │           │   │   ├── namespaced_class_dont_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_implementing_interface_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_implementing_interface_dont_call_parent_constructor.phpt
    │           │   │   ├── namespaced_class_partial.phpt
    │           │   │   ├── namespaced_class.phpt
    │           │   │   ├── namespaced_interface.phpt
    │           │   │   ├── nonexistent_class.phpt
    │           │   │   ├── nonexistent_class_with_namespace.phpt
    │           │   │   ├── nonexistent_class_with_namespace_starting_with_separator.phpt
    │           │   │   ├── proxy.phpt
    │           │   │   ├── return_type_declarations_object_method.phpt
    │           │   │   ├── return_type_declarations_self.phpt
    │           │   │   ├── return_type_declarations_static_method.phpt
    │           │   │   ├── scalar_type_declarations.phpt
    │           │   │   ├── wsdl_class_namespace.phpt
    │           │   │   ├── wsdl_class_partial.phpt
    │           │   │   └── wsdl_class.phpt
    │           │   ├── Invocation
    │           │   │   ├── ObjectTest.php
    │           │   │   └── StaticTest.php
    │           │   └── Matcher
    │           │       └── ConsecutiveParametersTest.php
    │           ├── MockObjectTest.php
    │           └── ProxyObjectTest.php
    ├── sebastian
    │   ├── code-unit-reverse-lookup
    │   │   ├── build.xml
    │   │   ├── ChangeLog.md
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   └── Wizard.php
    │   │   └── tests
    │   │       └── WizardTest.php
    │   ├── comparator
    │   │   ├── build
    │   │   │   └── travis-ci.xml
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── ArrayComparator.php
    │   │   │   ├── Comparator.php
    │   │   │   ├── ComparisonFailure.php
    │   │   │   ├── DateTimeComparator.php
    │   │   │   ├── DOMNodeComparator.php
    │   │   │   ├── DoubleComparator.php
    │   │   │   ├── ExceptionComparator.php
    │   │   │   ├── Factory.php
    │   │   │   ├── MockObjectComparator.php
    │   │   │   ├── NumericComparator.php
    │   │   │   ├── ObjectComparator.php
    │   │   │   ├── ResourceComparator.php
    │   │   │   ├── ScalarComparator.php
    │   │   │   ├── SplObjectStorageComparator.php
    │   │   │   └── TypeComparator.php
    │   │   └── tests
    │   │       ├── ArrayComparatorTest.php
    │   │       ├── autoload.php
    │   │       ├── bootstrap.php
    │   │       ├── DateTimeComparatorTest.php
    │   │       ├── DOMNodeComparatorTest.php
    │   │       ├── DoubleComparatorTest.php
    │   │       ├── ExceptionComparatorTest.php
    │   │       ├── FactoryTest.php
    │   │       ├── _files
    │   │       │   ├── Author.php
    │   │       │   ├── Book.php
    │   │       │   ├── ClassWithToString.php
    │   │       │   ├── SampleClass.php
    │   │       │   ├── Struct.php
    │   │       │   ├── TestClassComparator.php
    │   │       │   └── TestClass.php
    │   │       ├── MockObjectComparatorTest.php
    │   │       ├── NumericComparatorTest.php
    │   │       ├── ObjectComparatorTest.php
    │   │       ├── ResourceComparatorTest.php
    │   │       ├── ScalarComparatorTest.php
    │   │       ├── SplObjectStorageComparatorTest.php
    │   │       └── TypeComparatorTest.php
    │   ├── diff
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Chunk.php
    │   │   │   ├── Differ.php
    │   │   │   ├── Diff.php
    │   │   │   ├── LCS
    │   │   │   │   ├── LongestCommonSubsequence.php
    │   │   │   │   ├── MemoryEfficientLongestCommonSubsequenceImplementation.php
    │   │   │   │   └── TimeEfficientLongestCommonSubsequenceImplementation.php
    │   │   │   ├── Line.php
    │   │   │   └── Parser.php
    │   │   └── tests
    │   │       ├── DifferTest.php
    │   │       ├── fixtures
    │   │       │   ├── patch2.txt
    │   │       │   └── patch.txt
    │   │       ├── LCS
    │   │       │   └── TimeEfficientImplementationTest.php
    │   │       └── ParserTest.php
    │   ├── environment
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Console.php
    │   │   │   └── Runtime.php
    │   │   └── tests
    │   │       ├── ConsoleTest.php
    │   │       └── RuntimeTest.php
    │   ├── exporter
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   └── Exporter.php
    │   │   └── tests
    │   │       └── ExporterTest.php
    │   ├── global-state
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Blacklist.php
    │   │   │   ├── CodeExporter.php
    │   │   │   ├── Exception.php
    │   │   │   ├── Restorer.php
    │   │   │   ├── RuntimeException.php
    │   │   │   └── Snapshot.php
    │   │   └── tests
    │   │       ├── BlacklistTest.php
    │   │       ├── _fixture
    │   │       │   ├── BlacklistedChildClass.php
    │   │       │   ├── BlacklistedClass.php
    │   │       │   ├── BlacklistedImplementor.php
    │   │       │   ├── BlacklistedInterface.php
    │   │       │   ├── SnapshotClass.php
    │   │       │   ├── SnapshotDomDocument.php
    │   │       │   ├── SnapshotFunctions.php
    │   │       │   └── SnapshotTrait.php
    │   │       └── SnapshotTest.php
    │   ├── object-enumerator
    │   │   ├── build.xml
    │   │   ├── ChangeLog.md
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Enumerator.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       └── EnumeratorTest.php
    │   ├── recursion-context
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── src
    │   │   │   ├── Context.php
    │   │   │   ├── Exception.php
    │   │   │   └── InvalidArgumentException.php
    │   │   └── tests
    │   │       └── ContextTest.php
    │   ├── resource-operations
    │   │   ├── build
    │   │   │   └── generate.php
    │   │   ├── build.xml
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── README.md
    │   │   └── src
    │   │       └── ResourceOperations.php
    │   └── version
    │       ├── composer.json
    │       ├── LICENSE
    │       ├── README.md
    │       └── src
    │           └── Version.php
    ├── symfony
    │   ├── polyfill-mbstring
    │   │   ├── bootstrap.php
    │   │   ├── composer.json
    │   │   ├── LICENSE
    │   │   ├── Mbstring.php
    │   │   ├── README.md
    │   │   └── Resources
    │   │       └── unidata
    │   │           ├── lowerCase.php
    │   │           └── upperCase.php
    │   ├── var-dumper
    │   │   ├── Caster
    │   │   │   ├── AmqpCaster.php
    │   │   │   ├── Caster.php
    │   │   │   ├── ConstStub.php
    │   │   │   ├── CutArrayStub.php
    │   │   │   ├── CutStub.php
    │   │   │   ├── DoctrineCaster.php
    │   │   │   ├── DOMCaster.php
    │   │   │   ├── EnumStub.php
    │   │   │   ├── ExceptionCaster.php
    │   │   │   ├── FrameStub.php
    │   │   │   ├── MongoCaster.php
    │   │   │   ├── PdoCaster.php
    │   │   │   ├── PgSqlCaster.php
    │   │   │   ├── ReflectionCaster.php
    │   │   │   ├── ResourceCaster.php
    │   │   │   ├── SplCaster.php
    │   │   │   ├── StubCaster.php
    │   │   │   ├── TraceStub.php
    │   │   │   └── XmlResourceCaster.php
    │   │   ├── CHANGELOG.md
    │   │   ├── Cloner
    │   │   │   ├── AbstractCloner.php
    │   │   │   ├── ClonerInterface.php
    │   │   │   ├── Cursor.php
    │   │   │   ├── Data.php
    │   │   │   ├── DumperInterface.php
    │   │   │   ├── Stub.php
    │   │   │   └── VarCloner.php
    │   │   ├── composer.json
    │   │   ├── Dumper
    │   │   │   ├── AbstractDumper.php
    │   │   │   ├── CliDumper.php
    │   │   │   ├── DataDumperInterface.php
    │   │   │   └── HtmlDumper.php
    │   │   ├── Exception
    │   │   │   └── ThrowingCasterException.php
    │   │   ├── LICENSE
    │   │   ├── phpunit.xml.dist
    │   │   ├── README.md
    │   │   ├── Resources
    │   │   │   └── functions
    │   │   │       └── dump.php
    │   │   ├── Test
    │   │   │   └── VarDumperTestTrait.php
    │   │   ├── Tests
    │   │   │   ├── Caster
    │   │   │   │   ├── CasterTest.php
    │   │   │   │   ├── PdoCasterTest.php
    │   │   │   │   ├── ReflectionCasterTest.php
    │   │   │   │   └── SplCasterTest.php
    │   │   │   ├── CliDumperTest.php
    │   │   │   ├── Fixtures
    │   │   │   │   ├── dumb-var.php
    │   │   │   │   ├── GeneratorDemo.php
    │   │   │   │   ├── NotLoadableClass.php
    │   │   │   │   └── Twig.php
    │   │   │   ├── HtmlDumperTest.php
    │   │   │   ├── Test
    │   │   │   │   └── VarDumperTestTraitTest.php
    │   │   │   └── VarClonerTest.php
    │   │   └── VarDumper.php
    │   └── yaml
    │       ├── CHANGELOG.md
    │       ├── composer.json
    │       ├── Dumper.php
    │       ├── Escaper.php
    │       ├── Exception
    │       │   ├── DumpException.php
    │       │   ├── ExceptionInterface.php
    │       │   ├── ParseException.php
    │       │   └── RuntimeException.php
    │       ├── Inline.php
    │       ├── LICENSE
    │       ├── Parser.php
    │       ├── phpunit.xml.dist
    │       ├── README.md
    │       ├── Tests
    │       │   ├── DumperTest.php
    │       │   ├── Fixtures
    │       │   │   ├── arrow.gif
    │       │   │   ├── embededPhp.yml
    │       │   │   ├── escapedCharacters.yml
    │       │   │   ├── index.yml
    │       │   │   ├── multiple_lines_as_literal_block.yml
    │       │   │   ├── sfComments.yml
    │       │   │   ├── sfCompact.yml
    │       │   │   ├── sfMergeKey.yml
    │       │   │   ├── sfObjects.yml
    │       │   │   ├── sfQuotes.yml
    │       │   │   ├── sfTests.yml
    │       │   │   ├── unindentedCollections.yml
    │       │   │   ├── YtsAnchorAlias.yml
    │       │   │   ├── YtsBasicTests.yml
    │       │   │   ├── YtsBlockMapping.yml
    │       │   │   ├── YtsDocumentSeparator.yml
    │       │   │   ├── YtsErrorTests.yml
    │       │   │   ├── YtsFlowCollections.yml
    │       │   │   ├── YtsFoldedScalars.yml
    │       │   │   ├── YtsNullsAndEmpties.yml
    │       │   │   ├── YtsSpecificationExamples.yml
    │       │   │   └── YtsTypeTransfers.yml
    │       │   ├── InlineTest.php
    │       │   ├── ParseExceptionTest.php
    │       │   ├── ParserTest.php
    │       │   └── YamlTest.php
    │       ├── Unescaper.php
    │       └── Yaml.php
    └── webmozart
        └── assert
            ├── appveyor.yml
            ├── CHANGELOG.md
            ├── composer.json
            ├── LICENSE
            ├── phpunit.xml.dist
            ├── README.md
            ├── src
            │   └── Assert.php
            └── tests
                └── AssertTest.php