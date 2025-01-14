# PHP Foreach Loop Modification Issue

This repository demonstrates a common issue in PHP when modifying an array during a foreach loop iteration.  The example shows how this can lead to unexpected results. A more robust solution using `array_filter` is also provided.  The core problem lies in the way foreach handles array keys when elements are removed. 