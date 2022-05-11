for (int i= 1; i <= n; i++)
{
	if (i%3==0 && i%5==0)
	{
	std::cout << "Foo\n";
	}
	else if (i%3==0)
	{
	std::cout << "Bar\n";
	}
	else if (i%5==0)
	{
	std::cout << "FooBar\n";
	}
	else
	{
	std::cout << i << std::endl;
	}
}