class sitescontroller extends controller
{
    public function index()
    {
      return view('index');
    }
    public function 233()
    {
      $people=['nima','niba','nijiejie'];
    return view('site.233',compact('people'))
    }
};
