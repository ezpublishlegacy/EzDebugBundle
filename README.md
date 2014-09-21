EzDebugBundle
=============

## Installation

#### Update EzPublishKernel.php

<pre>
  ...
  use Harald\EzDebugBundle\HaraldEzDebugBundle;
  ...
  case "dev":
    $bundles[] = new HaraldEzDebugBundle();
  ...
</pre>

#### Update composer.json
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

#### Run composer require with <code>--dev</code>
<pre>
  composer require --dev htollefsen/ezdebugbundle:dev-master
</pre>


