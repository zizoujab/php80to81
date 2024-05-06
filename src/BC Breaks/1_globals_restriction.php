<?php

// Read and write access to individual array elements like $GLOBALS['var'] continues to work as-is.
// Read-only access to the entire $GLOBALS array also continues to be supported.
// However, write access to the entire $GLOBALS array is no longer supported.
array_pop($GLOBALS);