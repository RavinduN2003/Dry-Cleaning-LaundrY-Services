#include "Complaint.h"

#include <iostream>

using namespace std;

Complaint::Complaint() {
	complaintId = 0;
	cDescription = "";
}
Complaint::Complaint(int cId, string cDes) {
	complaintId = cId;
	cDescription = cDes;
}
void Complaint::viewCustomerComplaints() {
	cout << endl;
	cout << "Complaint ID : " << complaintId;
	cout << "Complaint Description : " << cDescription;
	cout << endl;
}
Complaint::~Complaint() {

}


