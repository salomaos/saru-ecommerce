#pragma checksum "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml" "{ff1816ec-aa5e-4d10-87f7-6f4963833460}" "1955145e28c705ea727ad48b8b1bc898eca8d3b4"
// <auto-generated/>
#pragma warning disable 1591
[assembly: global::Microsoft.AspNetCore.Razor.Hosting.RazorCompiledItemAttribute(typeof(AspNetCore.Views_User_Details), @"mvc.1.0.view", @"/Views/User/Details.cshtml")]
namespace AspNetCore
{
    #line hidden
    using System;
    using System.Collections.Generic;
    using System.Linq;
    using System.Threading.Tasks;
    using Microsoft.AspNetCore.Mvc;
    using Microsoft.AspNetCore.Mvc.Rendering;
    using Microsoft.AspNetCore.Mvc.ViewFeatures;
#nullable restore
#line 1 "/home/salomaos/repos/LES/saru-ecommerce/Views/_ViewImports.cshtml"
using saru_ecommerce;

#line default
#line hidden
#nullable disable
#nullable restore
#line 2 "/home/salomaos/repos/LES/saru-ecommerce/Views/_ViewImports.cshtml"
using saru_ecommerce.Models;

#line default
#line hidden
#nullable disable
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"1955145e28c705ea727ad48b8b1bc898eca8d3b4", @"/Views/User/Details.cshtml")]
    [global::Microsoft.AspNetCore.Razor.Hosting.RazorSourceChecksumAttribute(@"SHA1", @"21315e82af88327c1326bcde06589cdafeffb7b5", @"/Views/_ViewImports.cshtml")]
    public class Views_User_Details : global::Microsoft.AspNetCore.Mvc.Razor.RazorPage<saru_ecommerce.Models.User>
    {
        #pragma warning disable 1998
        public async override global::System.Threading.Tasks.Task ExecuteAsync()
        {
            WriteLiteral("\n");
#nullable restore
#line 3 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
  
    ViewData["Title"] = "Detalhes do Usuário";

#line default
#line hidden
#nullable disable
            WriteLiteral("\n<h1>");
#nullable restore
#line 7 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
Write(Html.DisplayFor(model => model.Name));

#line default
#line hidden
#nullable disable
            WriteLiteral("</h1>\n<hr>\n<div>\n    <dl class=\"row\">\n        <dt class=\"col-3\">");
#nullable restore
#line 11 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.UserId));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 12 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.UserId));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 14 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.Email));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 15 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.Email));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 17 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.Cpf));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 18 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.Cpf));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 20 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.BirthDate));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 21 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.BirthDate));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 23 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.Gender));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 24 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.Gender));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 26 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.Password));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 27 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.Password));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 29 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.PhoneNumberPrimary));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 30 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.PhoneNumberPrimary));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n\n        <dt class=\"col-3\">");
#nullable restore
#line 32 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayNameFor(model => model.PhoneNumberSecondary));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dt>\n        <dd class=\"col-9\">");
#nullable restore
#line 33 "/home/salomaos/repos/LES/saru-ecommerce/Views/User/Details.cshtml"
                     Write(Html.DisplayFor(model => model.PhoneNumberSecondary));

#line default
#line hidden
#nullable disable
            WriteLiteral("</dd>\n    </dl>\n</div>");
        }
        #pragma warning restore 1998
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.ViewFeatures.IModelExpressionProvider ModelExpressionProvider { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IUrlHelper Url { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.IViewComponentHelper Component { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IJsonHelper Json { get; private set; }
        [global::Microsoft.AspNetCore.Mvc.Razor.Internal.RazorInjectAttribute]
        public global::Microsoft.AspNetCore.Mvc.Rendering.IHtmlHelper<saru_ecommerce.Models.User> Html { get; private set; }
    }
}
#pragma warning restore 1591
