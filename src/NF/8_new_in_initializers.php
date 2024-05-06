<?php
class Test81 {
    public function __construct(
        private Logger $logger = new NullLogger,
    ) {}
}

//Instead, it is necessary to write code along the following lines:

class Test80 {
    private Logger $logger;

    public function __construct(
        ?Logger $logger = null,
    ) {
        $this->logger = $logger ?? new NullLogger;
    }
}
//This makes the actual default value less obvious (from an API contract perspective), and requires the use of a nullable argument.

new Test81(new Logger()); // Initializer not called
new Test81(); // Initializer called