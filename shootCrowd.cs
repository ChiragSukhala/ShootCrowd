using System;

namespace ConsoleApp2
{

    class Node
    {
        public int value;
        public Node next;
        public Node()
        {
            value = -1;
            next = null;
        }
        public Node(int val)
        {
            value = val;
            next = null;
        }
    }
    class LinkedList
    {
        private Node head;
        public Node tail;
        public LinkedList()
        {
            head = null;
            tail = null;
        }
        public void addNode(int val)
        {
            Node newNode = new Node(val);
            if (head == null)
            {
                head = newNode;
                tail = newNode;
            }
            else
            {
                tail.next = newNode;
                tail = newNode;
                tail.next = head;
            }
        }

        public Node getHead()
        {
            return head;
        }
    }
    class Program
    {
        static void solution(Node head)
        {
            // create a temp node to assign head to
            Node n = new Node();
            n = head;
            // remove elements according to the problem
            // until there is only one element left in
            // the lined list
            while (n.next != n)
            {
                n.next = n.next.next;
                n = n.next;
            }
            Console.WriteLine(n.value);
        }
        static void Main(string[] args)
        {
            // create a linked list
            LinkedList ll = new LinkedList();
            // add nodes in the linked list
            for (int i = 0; i < 100; ++i)
            {
                ll.addNode(i + 1);
            }

            // run solution
            solution(ll.getHead());
        }
    }
}
