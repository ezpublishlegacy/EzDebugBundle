HTollefsenEzDebugBundle
=============
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/caeff112-1c15-4eb5-9bce-380e59f25ed7/big.png)](https://insight.sensiolabs.com/projects/caeff112-1c15-4eb5-9bce-380e59f25ed7)
## Installation

1. Update EzPublishKernel.php
  <pre>
    ...
    use HTollefsen\EzDebugBundle\HTollefsenEzDebugBundle;
    ...
    case "dev":
      $bundles[] = new HTollefsenEzDebugBundle();
    ...
  </pre>
2. Update composer.json
  <pre>
    ...
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/htollefsen/ezdebugbundle"
        }
    ],
    ...
  </pre>
3. Run composer require with <code>--dev</code>
  <pre>
    composer require --dev htollefsen/ezdebugbundle:dev-master
  </pre>


