<?php 

namespace Ds\Cache;

enum Enum 
{
	case Vector;
	case Deque;
	case Queue;
	case Map;
	case Set;
	case Stack;
	case PriorityQueue;
}