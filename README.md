EzDebugBundle
=============

## Installation

1. Update EzPublishKernel.php
  <pre>
    ...
    use Harald\EzDebugBundle\HaraldEzDebugBundle;
    ...
    case "dev":
      $bundles[] = new HaraldEzDebugBundle();
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


