<?php

/*
 * This file is part of BedrockProtocol.
 * Copyright (C) 2014-2022 PocketMine Team <https://github.com/pmmp/BedrockProtocol>
 *
 * BedrockProtocol is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 */

declare(strict_types=1);

namespace pocketmine\network\mcpe\protocol\types\command;

/**
 * This file is automatically generated; do NOT edit it by hand.
 * Regenerate it by running tools/generate-command-parameter-types.php
 */
final class CommandParameterTypes{

	private function __construct(){
		//NOOP
	}

	public const INT = 1; // int
	public const VAL = 3; // float
	public const RVAL = 4; // value
	public const WILDCARDINT = 5; // wildcard int
	public const OPERATOR = 6; // operator
	public const COMPAREOPERATOR = 7; // compare operator
	public const SELECTION = 8; // target
	public const WILDCARDSELECTION = 10; // target
	public const PATHCOMMAND = 17; // filepath
	public const FULLINTEGERRANGE = 23; // integer range
	public const EQUIPMENTSLOTENUM = 47; // equipment slots
	public const ID = 56; // string
	public const POSITION = 64; // x y z
	public const POSITION_FLOAT = 65; // x y z
	public const MESSAGE_ROOT = 68; // message
	public const RAWTEXT = 70; // text
	public const JSON_OBJECT = 74; // json
	public const BLOCK_STATE_ARRAY = 84; // block states
	public const SLASHCOMMAND = 87; // command
}
