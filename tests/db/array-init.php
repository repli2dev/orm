<?php

/**
 * This file is part of the Nextras\ORM library.
 *
 * @license    MIT
 * @link       https://github.com/nextras/orm
 * @author     Jan Skrasek
 */

namespace NextrasTests\Orm;

/** @var Model $orm */

$orm->books->getMapper()->addMethod('findBooksWithEvenId', function() use ($orm) {
	$books = [];
	foreach ($orm->books->findAll() as $book) {
		if ($book->id % 2 === 0) {
			$books[] = $book;
		}
	}
	return $books;
});