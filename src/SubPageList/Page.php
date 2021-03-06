<?php

namespace SubPageList;

use Title;

/**
 * Represents a node in a sub page hierarchy.
 *
 * @since 1.0
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class Page {

	/**
	 * @since 1.0
	 *
	 * @var Title
	 */
	protected $title;

	/**
	 * @since 1.0
	 *
	 * @var Page[]
	 */
	protected $subPages = array();

	/**
	 * @since 1.0
	 *
	 * @param Title $title
	 * @param Page[] $subPages
	 */
	public function __construct( Title $title, array $subPages = array() ) {
		$this->title = $title;

		foreach ( $subPages as $subPage ) {
			$this->addSubPage( $subPage );
		}
	}

	/**
	 * @since 1.0
	 *
	 * @return Title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * @since 1.0
	 *
	 * @return Page[]
	 */
	public function getSubPages() {
		return $this->subPages;
	}

	/**
	 * @since 0.1
	 *
	 * @param Page $page
	 */
	public function addSubPage( Page $page ) {
		$this->subPages[] = $page;
	}

}
