#pragma once
#include <iostream>

using namespace std;

class Complaint
{
private:
	int complaintId;
	string cDescription;

public:
	Complaint();
	Complaint(int cId, string cDes);
	void viewCustomerComplaints();
	~Complaint();
};

