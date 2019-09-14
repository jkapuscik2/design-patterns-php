<?php

namespace structural\adapter;

interface FileAdapter {
	public function get(string $path) : File;
	public function save(string $path) : void;
	public function delete(string $path): void;
}