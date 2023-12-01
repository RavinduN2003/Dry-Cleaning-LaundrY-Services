#include "Administrator.h"
#include <iostream>
#include "Service.h"
#include "Complaint.h"

using namespace std;

Administrator::Administrator() {
    Username = "";
	password = 0;
	name = "";
	userId = 0;
}
Administrator::Administrator(string uName, int pw, string rName, int uId) {
	Username = uName;
	password = pw;
	name = rName;
	userId = uId;
}
string Administrator::editServices(int sId, string sType, double sPrice) {

	try {
		Service service(sId,sType,sPrice);
		return "Service Edit Successful!";
	}
	catch (const exception& e) {
		return "Service Edit Unsucceful!";
	}

}
void Administrator::handleComplaint() {
	Complaint complain;
	complain.viewCustomerComplaints();
}
Administrator::~Administrator() {

}