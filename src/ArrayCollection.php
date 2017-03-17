<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserGrid
 *
 * @author jooAziz
 */
class UserGrid {
    //put your code here
}
__construct( array $elements = array() )
Initializes a new ArrayCollection.
public array	
#toArray( )
Gets the PHP array representation of this collection.
public mixed	
#first( )
Sets the internal iterator to the first element in the collection and returns this element.
public mixed	
#last( )
Sets the internal iterator to the last element in the collection and returns this element.
public mixed	
#key( )
Gets the current key/index at the current internal iterator position.
public mixed	
#next( )
Moves the internal iterator position to the next element.
public mixed	
#current( )
Gets the element of the collection at the current internal iterator position.
public mixed	
#remove( mixed $key )
Removes an element with a specific key/index from the collection.
public boolean	
#removeElement( mixed $element )
Removes the specified element from the collection, if it is found.
public boolean	
#offsetExists( mixed $offset )
ArrayAccess implementation of offsetExists()
public mixed	
#offsetGet( mixed $offset )
ArrayAccess implementation of offsetGet()
public boolean	
#offsetSet( mixed $offset, mixed $value )
ArrayAccess implementation of offsetSet()
public mixed	
#offsetUnset( mixed $offset )
ArrayAccess implementation of offsetUnset()
public boolean	
#containsKey( mixed $key )
Checks whether the collection contains a specific key/index.
public boolean	
#contains( mixed $element )
Checks whether the given element is contained in the collection. Only element values are compared, not keys. The comparison of two elements is strict, that means not only the value but also the type must match. For objects this means reference equality.
public boolean	
#exists( Closure $p )
Tests for the existence of an element that satisfies the given predicate.
public mixed	
#indexOf( mixed $element )
Searches for a given element and, if found, returns the corresponding key/index of that element. The comparison of two elements is strict, that means not only the value but also the type must match. For objects this means reference equality.
public mixed	
#get( mixed $key )
Gets the element with the given key/index.
public array	
#getKeys( )
Gets all keys/indexes of the collection elements.
public array	
#getValues( )
Gets all elements.
public integer	
#count( )
Returns the number of elements in the collection.
public	
#set( mixed $key, mixed $value )
Adds/sets an element in the collection at the index / with the specified key.
public boolean	
#add( mixed $value )
Adds an element to the collection.
public boolean	
#isEmpty( )
Checks whether the collection is empty.
public ArrayIterator	
#getIterator( )
Gets an iterator for iterating over the elements in the collection.
public Doctrine\Common\Collections\Collection	
#map( Closure $func )
Applies the given function to each element in the collection and returns a new collection with the elements returned by the function.
public Doctrine\Common\Collections\Collection	
#filter( Closure $p )
Returns all the elements of this collection that satisfy the predicate p. The order of the elements is preserved.
public boolean	
#forAll( Closure $p )
Applies the given predicate p to all elements of this collection, returning true, if the predicate yields true for all elements.
public array	
#partition( Closure $p )
Partitions this collection in two collections according to a predicate. Keys are preserved in the resulting collections.
public string	
#__toString( )
Returns a string representation of this object.
public	
#clear( )
Clears the collection.
public array	
#slice( integer $offset, integer $length = null )
Extract a slice of $length elements starting at position $offset from the Collection.
public Doctrine\Common\Collections\Collection	
#matching( Doctrine\Common\Collections\Criteria $criteria )
Select all elements from a selectable that match the criteria and return a new collection containing these elements.