>> ## String Extension (Remove hyper link from text)
```
using System.Text;
using System.Text.RegularExpressions;

namespace DevSkill.Web.Extensions
{
    public static class StringExtensions
    {
        private static string[] _patterns = {
            @"https?://[^\s/$.?#].[^\s]*",
            @"http?://[^\s/$.?#].[^\s]*",
            "<a [^>]*href=(?:'(?<href>.*?)')|(?:\"(?<href>.*?)\")"
        };

        public static string ReplaceHyperlink(this string value, string replaceWith = null)
        {
            var result = value;

            foreach (var pattern in _patterns)
            {
                var regex = new Regex(pattern, RegexOptions.IgnoreCase);
                result = Regex.Replace(result, regex.ToString(), replaceWith);
            }

            return result;
        }
    }
}
```


>> ## Validation Attribute Extension (Check for valid date range)

```
using System;
using System.ComponentModel.DataAnnotations;
using System.Reflection;

namespace DevSkill.Http.Attributes
{
    public class ValidDateRangeAttribute : ValidationAttribute
    {
        protected override ValidationResult IsValid(object value, ValidationContext validationContext)
        {
            if (value == null)
            {
                return ValidationResult.Success;
            }

            PropertyInfo property = validationContext.ObjectType.GetProperty("StartDate");
            PropertyInfo property2 = validationContext.ObjectType.GetProperty("EndDate");
            string memberName = validationContext.MemberName;
            if (!(memberName == "StartDate"))
            {
                if (memberName == "EndDate" && property?.GetValue(validationContext.ObjectInstance) != null)
                {
                    DateTime dateTime = (DateTime)(property?.GetValue(validationContext.ObjectInstance));
                    if ((DateTime)value < dateTime)
                    {
                        return new ValidationResult(base.ErrorMessage ?? "End date must be greater than start date!");
                    }
                }
            }
            else if (property2?.GetValue(validationContext.ObjectInstance) != null)
            {
                DateTime dateTime2 = (DateTime)(property2?.GetValue(validationContext.ObjectInstance));
                if ((DateTime)value > dateTime2)
                {
                    return new ValidationResult(base.ErrorMessage ?? "Start date must be less than end date!");
                }
            }

            return ValidationResult.Success;
        }
    }
}
```
