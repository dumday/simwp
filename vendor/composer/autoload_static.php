<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc9accac7b514e63ee708d24f33dd99c9
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Validator\\Constraints\\' => 40,
            'Symfony\\Component\\Validator\\' => 28,
            'Symfony\\Component\\Translation\\' => 30,
            'Simwp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Validator\\Constraints\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Constraint',
        ),
        'Symfony\\Component\\Validator\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/validator',
        ),
        'Symfony\\Component\\Translation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/translation',
        ),
        'Simwp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Simwp\\Admin' => __DIR__ . '/../..' . '/src/Admin.php',
        'Simwp\\AutoProcessedOptionManager' => __DIR__ . '/../..' . '/src/AutoProcessedOptionManager.php',
        'Simwp\\AutoRenderer' => __DIR__ . '/../..' . '/src/AutoRenderer.php',
        'Simwp\\Component\\Base' => __DIR__ . '/../..' . '/src/Component/Base.php',
        'Simwp\\Component\\Menu' => __DIR__ . '/../..' . '/src/Component/Menu.php',
        'Simwp\\Component\\Notice' => __DIR__ . '/../..' . '/src/Component/Notice.php',
        'Simwp\\Component\\Option' => __DIR__ . '/../..' . '/src/Component/Option.php',
        'Simwp\\Component\\Page' => __DIR__ . '/../..' . '/src/Component/Page.php',
        'Simwp\\Component\\Section' => __DIR__ . '/../..' . '/src/Component/Section.php',
        'Simwp\\Form\\Base' => __DIR__ . '/../..' . '/src/Form/Base.php',
        'Simwp\\Form\\Checkboxes' => __DIR__ . '/../..' . '/src/Form/Checkboxes.php',
        'Simwp\\Form\\ColorPicker' => __DIR__ . '/../..' . '/src/Form/ColorPicker.php',
        'Simwp\\Form\\DatePicker' => __DIR__ . '/../..' . '/src/Form/DatePicker.php',
        'Simwp\\Form\\Filter\\Base' => __DIR__ . '/../..' . '/src/Form/Filter/Base.php',
        'Simwp\\Form\\Filter\\Categories' => __DIR__ . '/../..' . '/src/Form/Filter/Categories.php',
        'Simwp\\Form\\Filter\\Post' => __DIR__ . '/../..' . '/src/Form/Filter/Post.php',
        'Simwp\\Form\\Image' => __DIR__ . '/../..' . '/src/Form/Image.php',
        'Simwp\\Form\\Input' => __DIR__ . '/../..' . '/src/Form/Input.php',
        'Simwp\\Form\\Lines' => __DIR__ . '/../..' . '/src/Form/Lines.php',
        'Simwp\\Form\\Loop' => __DIR__ . '/../..' . '/src/Form/Loop.php',
        'Simwp\\Form\\Options' => __DIR__ . '/../..' . '/src/Form/Options.php',
        'Simwp\\Form\\Radios' => __DIR__ . '/../..' . '/src/Form/Radios.php',
        'Simwp\\Form\\Tags' => __DIR__ . '/../..' . '/src/Form/Tags.php',
        'Simwp\\Form\\Textarea' => __DIR__ . '/../..' . '/src/Form/Textarea.php',
        'Simwp\\Form\\Toggle' => __DIR__ . '/../..' . '/src/Form/Toggle.php',
        'Simwp\\GenericHelpers' => __DIR__ . '/../..' . '/src/GenericHelpers.php',
        'Simwp\\OptionManager' => __DIR__ . '/../..' . '/src/OptionManager.php',
        'Simwp\\Section' => __DIR__ . '/../..' . '/src/Section.php',
        'Symfony\\Component\\Translation\\Catalogue\\AbstractOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/AbstractOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\MergeOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/MergeOperation.php',
        'Symfony\\Component\\Translation\\Catalogue\\OperationInterface' => __DIR__ . '/..' . '/symfony/translation/Catalogue/OperationInterface.php',
        'Symfony\\Component\\Translation\\Catalogue\\TargetOperation' => __DIR__ . '/..' . '/symfony/translation/Catalogue/TargetOperation.php',
        'Symfony\\Component\\Translation\\DataCollectorTranslator' => __DIR__ . '/..' . '/symfony/translation/DataCollectorTranslator.php',
        'Symfony\\Component\\Translation\\DataCollector\\TranslationDataCollector' => __DIR__ . '/..' . '/symfony/translation/DataCollector/TranslationDataCollector.php',
        'Symfony\\Component\\Translation\\Dumper\\CsvFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/CsvFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\DumperInterface' => __DIR__ . '/..' . '/symfony/translation/Dumper/DumperInterface.php',
        'Symfony\\Component\\Translation\\Dumper\\FileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/FileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IcuResFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IcuResFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\IniFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/IniFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\JsonFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/JsonFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\MoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/MoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PhpFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PhpFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\PoFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/PoFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\QtFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/QtFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\XliffFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/XliffFileDumper.php',
        'Symfony\\Component\\Translation\\Dumper\\YamlFileDumper' => __DIR__ . '/..' . '/symfony/translation/Dumper/YamlFileDumper.php',
        'Symfony\\Component\\Translation\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/translation/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Translation\\Exception\\InvalidResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/InvalidResourceException.php',
        'Symfony\\Component\\Translation\\Exception\\NotFoundResourceException' => __DIR__ . '/..' . '/symfony/translation/Exception/NotFoundResourceException.php',
        'Symfony\\Component\\Translation\\Extractor\\AbstractFileExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/AbstractFileExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ChainExtractor' => __DIR__ . '/..' . '/symfony/translation/Extractor/ChainExtractor.php',
        'Symfony\\Component\\Translation\\Extractor\\ExtractorInterface' => __DIR__ . '/..' . '/symfony/translation/Extractor/ExtractorInterface.php',
        'Symfony\\Component\\Translation\\IdentityTranslator' => __DIR__ . '/..' . '/symfony/translation/IdentityTranslator.php',
        'Symfony\\Component\\Translation\\Interval' => __DIR__ . '/..' . '/symfony/translation/Interval.php',
        'Symfony\\Component\\Translation\\Loader\\ArrayLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/ArrayLoader.php',
        'Symfony\\Component\\Translation\\Loader\\CsvFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/CsvFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\FileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/FileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuDatFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IcuResFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IcuResFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\IniFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/IniFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\JsonFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/JsonFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/symfony/translation/Loader/LoaderInterface.php',
        'Symfony\\Component\\Translation\\Loader\\MoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/MoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PhpFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PhpFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\PoFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/PoFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\QtFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/QtFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\XliffFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/XliffFileLoader.php',
        'Symfony\\Component\\Translation\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/translation/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Translation\\LoggingTranslator' => __DIR__ . '/..' . '/symfony/translation/LoggingTranslator.php',
        'Symfony\\Component\\Translation\\MessageCatalogue' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogue.php',
        'Symfony\\Component\\Translation\\MessageCatalogueInterface' => __DIR__ . '/..' . '/symfony/translation/MessageCatalogueInterface.php',
        'Symfony\\Component\\Translation\\MessageSelector' => __DIR__ . '/..' . '/symfony/translation/MessageSelector.php',
        'Symfony\\Component\\Translation\\MetadataAwareInterface' => __DIR__ . '/..' . '/symfony/translation/MetadataAwareInterface.php',
        'Symfony\\Component\\Translation\\PluralizationRules' => __DIR__ . '/..' . '/symfony/translation/PluralizationRules.php',
        'Symfony\\Component\\Translation\\Translator' => __DIR__ . '/..' . '/symfony/translation/Translator.php',
        'Symfony\\Component\\Translation\\TranslatorBagInterface' => __DIR__ . '/..' . '/symfony/translation/TranslatorBagInterface.php',
        'Symfony\\Component\\Translation\\TranslatorInterface' => __DIR__ . '/..' . '/symfony/translation/TranslatorInterface.php',
        'Symfony\\Component\\Translation\\Util\\ArrayConverter' => __DIR__ . '/..' . '/symfony/translation/Util/ArrayConverter.php',
        'Symfony\\Component\\Translation\\Writer\\TranslationWriter' => __DIR__ . '/..' . '/symfony/translation/Writer/TranslationWriter.php',
        'Symfony\\Component\\Validator\\Constraint' => __DIR__ . '/..' . '/symfony/validator/Constraint.php',
        'Symfony\\Component\\Validator\\ConstraintValidator' => __DIR__ . '/..' . '/symfony/validator/ConstraintValidator.php',
        'Symfony\\Component\\Validator\\ConstraintValidatorFactory' => __DIR__ . '/..' . '/symfony/validator/ConstraintValidatorFactory.php',
        'Symfony\\Component\\Validator\\ConstraintValidatorFactoryInterface' => __DIR__ . '/..' . '/symfony/validator/ConstraintValidatorFactoryInterface.php',
        'Symfony\\Component\\Validator\\ConstraintValidatorInterface' => __DIR__ . '/..' . '/symfony/validator/ConstraintValidatorInterface.php',
        'Symfony\\Component\\Validator\\ConstraintViolation' => __DIR__ . '/..' . '/symfony/validator/ConstraintViolation.php',
        'Symfony\\Component\\Validator\\ConstraintViolationInterface' => __DIR__ . '/..' . '/symfony/validator/ConstraintViolationInterface.php',
        'Symfony\\Component\\Validator\\ConstraintViolationList' => __DIR__ . '/..' . '/symfony/validator/ConstraintViolationList.php',
        'Symfony\\Component\\Validator\\ConstraintViolationListInterface' => __DIR__ . '/..' . '/symfony/validator/ConstraintViolationListInterface.php',
        'Symfony\\Component\\Validator\\Constraints\\AbstractComparison' => __DIR__ . '/..' . '/symfony/validator/Constraints/AbstractComparison.php',
        'Symfony\\Component\\Validator\\Constraints\\AbstractComparisonValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/AbstractComparisonValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\All' => __DIR__ . '/..' . '/symfony/validator/Constraints/All.php',
        'Symfony\\Component\\Validator\\Constraints\\AllValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/AllValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Bic' => __DIR__ . '/..' . '/symfony/validator/Constraints/Bic.php',
        'Symfony\\Component\\Validator\\Constraints\\BicValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/BicValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Blank' => __DIR__ . '/..' . '/symfony/validator/Constraints/Blank.php',
        'Symfony\\Component\\Validator\\Constraints\\BlankValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/BlankValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Callback' => __DIR__ . '/..' . '/symfony/validator/Constraints/Callback.php',
        'Symfony\\Component\\Validator\\Constraints\\CallbackValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CallbackValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\CardScheme' => __DIR__ . '/..' . '/symfony/validator/Constraints/CardScheme.php',
        'Symfony\\Component\\Validator\\Constraints\\CardSchemeValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CardSchemeValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Choice' => __DIR__ . '/..' . '/symfony/validator/Constraints/Choice.php',
        'Symfony\\Component\\Validator\\Constraints\\ChoiceValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/ChoiceValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Collection' => __DIR__ . '/..' . '/symfony/validator/Constraints/Collection.php',
        'Symfony\\Component\\Validator\\Constraints\\CollectionValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CollectionValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Color' => __DIR__ . '/../..' . '/src/Constraint/Color.php',
        'Symfony\\Component\\Validator\\Constraints\\ColorValidator' => __DIR__ . '/../..' . '/src/Constraint/ColorValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Composite' => __DIR__ . '/..' . '/symfony/validator/Constraints/Composite.php',
        'Symfony\\Component\\Validator\\Constraints\\Count' => __DIR__ . '/..' . '/symfony/validator/Constraints/Count.php',
        'Symfony\\Component\\Validator\\Constraints\\CountValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CountValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Country' => __DIR__ . '/..' . '/symfony/validator/Constraints/Country.php',
        'Symfony\\Component\\Validator\\Constraints\\CountryValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CountryValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Currency' => __DIR__ . '/..' . '/symfony/validator/Constraints/Currency.php',
        'Symfony\\Component\\Validator\\Constraints\\CurrencyValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/CurrencyValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Date' => __DIR__ . '/..' . '/symfony/validator/Constraints/Date.php',
        'Symfony\\Component\\Validator\\Constraints\\DateTime' => __DIR__ . '/..' . '/symfony/validator/Constraints/DateTime.php',
        'Symfony\\Component\\Validator\\Constraints\\DateTimeValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/DateTimeValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\DateValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/DateValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Email' => __DIR__ . '/..' . '/symfony/validator/Constraints/Email.php',
        'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/EmailValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\EqualTo' => __DIR__ . '/..' . '/symfony/validator/Constraints/EqualTo.php',
        'Symfony\\Component\\Validator\\Constraints\\EqualToValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/EqualToValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Existence' => __DIR__ . '/..' . '/symfony/validator/Constraints/Existence.php',
        'Symfony\\Component\\Validator\\Constraints\\Expression' => __DIR__ . '/..' . '/symfony/validator/Constraints/Expression.php',
        'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/ExpressionValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\File' => __DIR__ . '/..' . '/symfony/validator/Constraints/File.php',
        'Symfony\\Component\\Validator\\Constraints\\FileValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/FileValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\GreaterThan' => __DIR__ . '/..' . '/symfony/validator/Constraints/GreaterThan.php',
        'Symfony\\Component\\Validator\\Constraints\\GreaterThanOrEqual' => __DIR__ . '/..' . '/symfony/validator/Constraints/GreaterThanOrEqual.php',
        'Symfony\\Component\\Validator\\Constraints\\GreaterThanOrEqualValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/GreaterThanOrEqualValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\GreaterThanValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/GreaterThanValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\GroupSequence' => __DIR__ . '/..' . '/symfony/validator/Constraints/GroupSequence.php',
        'Symfony\\Component\\Validator\\Constraints\\GroupSequenceProvider' => __DIR__ . '/..' . '/symfony/validator/Constraints/GroupSequenceProvider.php',
        'Symfony\\Component\\Validator\\Constraints\\Iban' => __DIR__ . '/..' . '/symfony/validator/Constraints/Iban.php',
        'Symfony\\Component\\Validator\\Constraints\\IbanValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IbanValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\IdenticalTo' => __DIR__ . '/..' . '/symfony/validator/Constraints/IdenticalTo.php',
        'Symfony\\Component\\Validator\\Constraints\\IdenticalToValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IdenticalToValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Image' => __DIR__ . '/..' . '/symfony/validator/Constraints/Image.php',
        'Symfony\\Component\\Validator\\Constraints\\ImageValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/ImageValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Ip' => __DIR__ . '/..' . '/symfony/validator/Constraints/Ip.php',
        'Symfony\\Component\\Validator\\Constraints\\IpValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IpValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\IsFalse' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsFalse.php',
        'Symfony\\Component\\Validator\\Constraints\\IsFalseValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsFalseValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\IsNull' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsNull.php',
        'Symfony\\Component\\Validator\\Constraints\\IsNullValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsNullValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\IsTrue' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsTrue.php',
        'Symfony\\Component\\Validator\\Constraints\\IsTrueValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsTrueValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Isbn' => __DIR__ . '/..' . '/symfony/validator/Constraints/Isbn.php',
        'Symfony\\Component\\Validator\\Constraints\\IsbnValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IsbnValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Issn' => __DIR__ . '/..' . '/symfony/validator/Constraints/Issn.php',
        'Symfony\\Component\\Validator\\Constraints\\IssnValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/IssnValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Language' => __DIR__ . '/..' . '/symfony/validator/Constraints/Language.php',
        'Symfony\\Component\\Validator\\Constraints\\LanguageValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LanguageValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Length' => __DIR__ . '/..' . '/symfony/validator/Constraints/Length.php',
        'Symfony\\Component\\Validator\\Constraints\\LengthValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LengthValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\LessThan' => __DIR__ . '/..' . '/symfony/validator/Constraints/LessThan.php',
        'Symfony\\Component\\Validator\\Constraints\\LessThanOrEqual' => __DIR__ . '/..' . '/symfony/validator/Constraints/LessThanOrEqual.php',
        'Symfony\\Component\\Validator\\Constraints\\LessThanOrEqualValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LessThanOrEqualValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\LessThanValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LessThanValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Locale' => __DIR__ . '/..' . '/symfony/validator/Constraints/Locale.php',
        'Symfony\\Component\\Validator\\Constraints\\LocaleValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LocaleValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Luhn' => __DIR__ . '/..' . '/symfony/validator/Constraints/Luhn.php',
        'Symfony\\Component\\Validator\\Constraints\\LuhnValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/LuhnValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\NotBlank' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotBlank.php',
        'Symfony\\Component\\Validator\\Constraints\\NotBlankValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotBlankValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\NotEqualTo' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotEqualTo.php',
        'Symfony\\Component\\Validator\\Constraints\\NotEqualToValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotEqualToValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\NotIdenticalTo' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotIdenticalTo.php',
        'Symfony\\Component\\Validator\\Constraints\\NotIdenticalToValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotIdenticalToValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\NotNull' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotNull.php',
        'Symfony\\Component\\Validator\\Constraints\\NotNullValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/NotNullValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Optional' => __DIR__ . '/..' . '/symfony/validator/Constraints/Optional.php',
        'Symfony\\Component\\Validator\\Constraints\\Range' => __DIR__ . '/..' . '/symfony/validator/Constraints/Range.php',
        'Symfony\\Component\\Validator\\Constraints\\RangeValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/RangeValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Regex' => __DIR__ . '/..' . '/symfony/validator/Constraints/Regex.php',
        'Symfony\\Component\\Validator\\Constraints\\RegexValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/RegexValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Required' => __DIR__ . '/..' . '/symfony/validator/Constraints/Required.php',
        'Symfony\\Component\\Validator\\Constraints\\Time' => __DIR__ . '/..' . '/symfony/validator/Constraints/Time.php',
        'Symfony\\Component\\Validator\\Constraints\\TimeValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/TimeValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Traverse' => __DIR__ . '/..' . '/symfony/validator/Constraints/Traverse.php',
        'Symfony\\Component\\Validator\\Constraints\\Type' => __DIR__ . '/..' . '/symfony/validator/Constraints/Type.php',
        'Symfony\\Component\\Validator\\Constraints\\TypeValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/TypeValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Url' => __DIR__ . '/..' . '/symfony/validator/Constraints/Url.php',
        'Symfony\\Component\\Validator\\Constraints\\UrlValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/UrlValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Uuid' => __DIR__ . '/..' . '/symfony/validator/Constraints/Uuid.php',
        'Symfony\\Component\\Validator\\Constraints\\UuidValidator' => __DIR__ . '/..' . '/symfony/validator/Constraints/UuidValidator.php',
        'Symfony\\Component\\Validator\\Constraints\\Valid' => __DIR__ . '/..' . '/symfony/validator/Constraints/Valid.php',
        'Symfony\\Component\\Validator\\Context\\ExecutionContext' => __DIR__ . '/..' . '/symfony/validator/Context/ExecutionContext.php',
        'Symfony\\Component\\Validator\\Context\\ExecutionContextFactory' => __DIR__ . '/..' . '/symfony/validator/Context/ExecutionContextFactory.php',
        'Symfony\\Component\\Validator\\Context\\ExecutionContextFactoryInterface' => __DIR__ . '/..' . '/symfony/validator/Context/ExecutionContextFactoryInterface.php',
        'Symfony\\Component\\Validator\\Context\\ExecutionContextInterface' => __DIR__ . '/..' . '/symfony/validator/Context/ExecutionContextInterface.php',
        'Symfony\\Component\\Validator\\Exception\\BadMethodCallException' => __DIR__ . '/..' . '/symfony/validator/Exception/BadMethodCallException.php',
        'Symfony\\Component\\Validator\\Exception\\ConstraintDefinitionException' => __DIR__ . '/..' . '/symfony/validator/Exception/ConstraintDefinitionException.php',
        'Symfony\\Component\\Validator\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/symfony/validator/Exception/ExceptionInterface.php',
        'Symfony\\Component\\Validator\\Exception\\GroupDefinitionException' => __DIR__ . '/..' . '/symfony/validator/Exception/GroupDefinitionException.php',
        'Symfony\\Component\\Validator\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/symfony/validator/Exception/InvalidArgumentException.php',
        'Symfony\\Component\\Validator\\Exception\\InvalidOptionsException' => __DIR__ . '/..' . '/symfony/validator/Exception/InvalidOptionsException.php',
        'Symfony\\Component\\Validator\\Exception\\MappingException' => __DIR__ . '/..' . '/symfony/validator/Exception/MappingException.php',
        'Symfony\\Component\\Validator\\Exception\\MissingOptionsException' => __DIR__ . '/..' . '/symfony/validator/Exception/MissingOptionsException.php',
        'Symfony\\Component\\Validator\\Exception\\NoSuchMetadataException' => __DIR__ . '/..' . '/symfony/validator/Exception/NoSuchMetadataException.php',
        'Symfony\\Component\\Validator\\Exception\\OutOfBoundsException' => __DIR__ . '/..' . '/symfony/validator/Exception/OutOfBoundsException.php',
        'Symfony\\Component\\Validator\\Exception\\RuntimeException' => __DIR__ . '/..' . '/symfony/validator/Exception/RuntimeException.php',
        'Symfony\\Component\\Validator\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/validator/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\Validator\\Exception\\UnsupportedMetadataException' => __DIR__ . '/..' . '/symfony/validator/Exception/UnsupportedMetadataException.php',
        'Symfony\\Component\\Validator\\Exception\\ValidatorException' => __DIR__ . '/..' . '/symfony/validator/Exception/ValidatorException.php',
        'Symfony\\Component\\Validator\\GroupSequenceProviderInterface' => __DIR__ . '/..' . '/symfony/validator/GroupSequenceProviderInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\Cache\\CacheInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/Cache/CacheInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\Cache\\DoctrineCache' => __DIR__ . '/..' . '/symfony/validator/Mapping/Cache/DoctrineCache.php',
        'Symfony\\Component\\Validator\\Mapping\\CascadingStrategy' => __DIR__ . '/..' . '/symfony/validator/Mapping/CascadingStrategy.php',
        'Symfony\\Component\\Validator\\Mapping\\ClassMetadata' => __DIR__ . '/..' . '/symfony/validator/Mapping/ClassMetadata.php',
        'Symfony\\Component\\Validator\\Mapping\\ClassMetadataInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/ClassMetadataInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\Factory\\BlackHoleMetadataFactory' => __DIR__ . '/..' . '/symfony/validator/Mapping/Factory/BlackHoleMetadataFactory.php',
        'Symfony\\Component\\Validator\\Mapping\\Factory\\LazyLoadingMetadataFactory' => __DIR__ . '/..' . '/symfony/validator/Mapping/Factory/LazyLoadingMetadataFactory.php',
        'Symfony\\Component\\Validator\\Mapping\\Factory\\MetadataFactoryInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/Factory/MetadataFactoryInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\GenericMetadata' => __DIR__ . '/..' . '/symfony/validator/Mapping/GenericMetadata.php',
        'Symfony\\Component\\Validator\\Mapping\\GetterMetadata' => __DIR__ . '/..' . '/symfony/validator/Mapping/GetterMetadata.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\AbstractLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/AbstractLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\AnnotationLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/AnnotationLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\FileLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/FileLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\FilesLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/FilesLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderChain' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/LoaderChain.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\LoaderInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/LoaderInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\StaticMethodLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/StaticMethodLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFileLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/XmlFileLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\XmlFilesLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/XmlFilesLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFileLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/YamlFileLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\Loader\\YamlFilesLoader' => __DIR__ . '/..' . '/symfony/validator/Mapping/Loader/YamlFilesLoader.php',
        'Symfony\\Component\\Validator\\Mapping\\MemberMetadata' => __DIR__ . '/..' . '/symfony/validator/Mapping/MemberMetadata.php',
        'Symfony\\Component\\Validator\\Mapping\\MetadataInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/MetadataInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\PropertyMetadata' => __DIR__ . '/..' . '/symfony/validator/Mapping/PropertyMetadata.php',
        'Symfony\\Component\\Validator\\Mapping\\PropertyMetadataInterface' => __DIR__ . '/..' . '/symfony/validator/Mapping/PropertyMetadataInterface.php',
        'Symfony\\Component\\Validator\\Mapping\\TraversalStrategy' => __DIR__ . '/..' . '/symfony/validator/Mapping/TraversalStrategy.php',
        'Symfony\\Component\\Validator\\ObjectInitializerInterface' => __DIR__ . '/..' . '/symfony/validator/ObjectInitializerInterface.php',
        'Symfony\\Component\\Validator\\Util\\PropertyPath' => __DIR__ . '/..' . '/symfony/validator/Util/PropertyPath.php',
        'Symfony\\Component\\Validator\\Validation' => __DIR__ . '/..' . '/symfony/validator/Validation.php',
        'Symfony\\Component\\Validator\\ValidatorBuilder' => __DIR__ . '/..' . '/symfony/validator/ValidatorBuilder.php',
        'Symfony\\Component\\Validator\\ValidatorBuilderInterface' => __DIR__ . '/..' . '/symfony/validator/ValidatorBuilderInterface.php',
        'Symfony\\Component\\Validator\\Validator\\ContextualValidatorInterface' => __DIR__ . '/..' . '/symfony/validator/Validator/ContextualValidatorInterface.php',
        'Symfony\\Component\\Validator\\Validator\\RecursiveContextualValidator' => __DIR__ . '/..' . '/symfony/validator/Validator/RecursiveContextualValidator.php',
        'Symfony\\Component\\Validator\\Validator\\RecursiveValidator' => __DIR__ . '/..' . '/symfony/validator/Validator/RecursiveValidator.php',
        'Symfony\\Component\\Validator\\Validator\\ValidatorInterface' => __DIR__ . '/..' . '/symfony/validator/Validator/ValidatorInterface.php',
        'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilder' => __DIR__ . '/..' . '/symfony/validator/Violation/ConstraintViolationBuilder.php',
        'Symfony\\Component\\Validator\\Violation\\ConstraintViolationBuilderInterface' => __DIR__ . '/..' . '/symfony/validator/Violation/ConstraintViolationBuilderInterface.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc9accac7b514e63ee708d24f33dd99c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc9accac7b514e63ee708d24f33dd99c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc9accac7b514e63ee708d24f33dd99c9::$classMap;

        }, null, ClassLoader::class);
    }
}
