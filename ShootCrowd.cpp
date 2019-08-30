#include <iostream>

using namespace std;

struct node
{
    int data;
    node *next;
};

class linked_list
{
private:
    node *head,*tail;
public:
    linked_list(){
        head = NULL;
        tail = NULL;
    }

    void add_node(int n){
        node *temp = new node;
        temp->data = n;
        temp->next = NULL;
        
        if(head==NULL){
        	head = temp;
        	tail = temp;
		}
		else{
			tail->next = temp;
			tail = temp;
			tail->next = head;
		}
    }
    
    void traversal(){
    	node *ptr = new node;
    	ptr = head;
    	while(ptr->next!=ptr){    
    		ptr->next = ptr->next->next;
    		ptr = ptr->next;
		}
		cout<<"The final person remaining is : "<<ptr->data;
	}
};

int main()
{
    linked_list a;
    int i,n;
    cout<<"Enter Number: ";
    cin>>n;
    for(i=1;i<=n;i++){
    	a.add_node(i);	
	}
	a.traversal();
    return 0;
}
