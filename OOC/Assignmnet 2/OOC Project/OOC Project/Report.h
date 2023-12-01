#pragma once
#include <iostream>

using namespace std;

class Report
{
private:
	int reportId;
	string reportDes;

public:
	Report();
	Report(int rId, string rDes);
	void generateReports(int rId, string rDes);
	~Report();

};

