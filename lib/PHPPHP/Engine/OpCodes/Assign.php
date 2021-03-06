<?php

namespace PHPPHP\Engine\OpCodes;

class Assign implements \PHPPHP\Engine\OpCode {

    public function execute(\PHPPHP\Engine\ExecuteData $data) {
        $data->opLine->op1->value = $data->opLine->op2->value;
        $data->opLine->op1->type = $data->opLine->op2->type;
        $data->opLine->result->value = $data->opLine->op2->value;
        $data->opLine->result->type = $data->opLine->op2->type;

        $data->nextOp();
    }

}