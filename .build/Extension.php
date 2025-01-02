<?php

namespace Darken\Debugbar\Build;

class Extension extends \Darken\Service\Extension
{
    public function getClassMap(): array
    {
        return array (
);
    }

    public function getSerializedEvents(): string
    {
        return 'YToxOntzOjI5OiJEYXJrZW5cRXZlbnRzXEFmdGVyQnVpbGRFdmVudCI7YToxOntpOjA7TzoxNjoiT3Bpc1xDbG9zdXJlXEJveCI6Mjp7aTowO2k6MTtpOjE7YToxOntzOjQ6ImluZm8iO086MjQ6Ik9waXNcQ2xvc3VyZVxDbG9zdXJlSW5mbyI6Mzp7czozOiJrZXkiO3M6MzI6IjZlY2I1MjlkNjJiMjI5ZGM5ZGZlZTNkMzAzY2NkYjlmIjtzOjc6ImltcG9ydHMiO3M6OTU6InVzZSBEYXJrZW5cRXZlbnRzXEFmdGVyQnVpbGRFdmVudCwKICAgIERlYnVnQmFyXFN0YW5kYXJkRGVidWdCYXIsCiAgICBZaWlzb2Z0XEZpbGVzXEZpbGVIZWxwZXI7IjtzOjQ6ImJvZHkiO3M6MTEyOToiZnVuY3Rpb24gKEFmdGVyQnVpbGRFdmVudCAkZXZlbnQpIHsKICAgICAgICAgICAgLy8gaG93IGNvdWxkIHdlIGRpcmVjdGx5IGdldCBhY2NlcyB0byBwdWJsaWMgZm9sZGVyPwogICAgICAgICAgICAkYXNzZXRzRm9sZGVyID0gJGV2ZW50LT5hcHAtPmNvbmZpZy0+Z2V0Um9vdERpcmVjdG9yeVBhdGgoKSAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAncHVibGljJyAuIERJUkVDVE9SWV9TRVBBUkFUT1IgLiAnYXNzZXRzJzsKCiAgICAgICAgICAgIC8vaWYgKCFmaWxlX2V4aXN0cygkYXNzZXRzRm9sZGVyKSkgewogICAgICAgICAgICAvLyAgICByZXR1cm47CiAgICAgICAgICAgIC8vfQoKICAgICAgICAgICAgJGFzc2V0c1ZlbmRvciA9ICRhc3NldHNGb2xkZXIgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJ2RlYnVnYmFyJzsKICAgICAgICAgICAgRmlsZUhlbHBlcjo6ZW5zdXJlRGlyZWN0b3J5KCRhc3NldHNWZW5kb3IpOwoKICAgICAgICAgICAgJGpzUmVuZGVyZXIgPSAobmV3IFN0YW5kYXJkRGVidWdCYXIoKSktPmdldEphdmFzY3JpcHRSZW5kZXJlcigpOwogICAgICAgICAgICAvLyRqc1JlbmRlcmVyLT5zZXRCYXNlUGF0aCgnL1Jlc291cmNlcy92ZW5kb3IvJyk7CiAgICAgICAgICAgIAogICAgICAgICAgICAkYXNzZXRzID0gJGpzUmVuZGVyZXItPmdldEFzc2V0cygpOwoKICAgICAgICAgICAgZm9yZWFjaCAoJGFzc2V0cyBhcyAkdHlwZXMpIHsKICAgICAgICAgICAgICAgIGZvcmVhY2ggKCR0eXBlcyBhcyAkZmlsZSkgewogICAgICAgICAgICAgICAgICAgICRzb3VyY2VGaWxlID0gJGZpbGU7CgogICAgICAgICAgICAgICAgICAgICR0YXJnZXRGaWxlID0gc3RyX3JlcGxhY2UoJGpzUmVuZGVyZXItPmdldEJhc2VQYXRoKCksICcnLCAkc291cmNlRmlsZSk7CiAgICAgICAgICAgICAgICAgICAgCiAgICAgICAgICAgICAgICAgICAgZWNobyAkc291cmNlRmlsZSAuICcgLT4gJyAuICR0YXJnZXRGaWxlIC4gUEhQX0VPTDsKCiAgICAgICAgICAgICAgICAgICAgRmlsZUhlbHBlcjo6Y29weUZpbGUoJHNvdXJjZUZpbGUsICRhc3NldHNWZW5kb3IgLiBESVJFQ1RPUllfU0VQQVJBVE9SIC4gJHRhcmdldEZpbGUpOwogICAgICAgICAgICAgICAgfQogICAgICAgICAgICB9CiAgICAgICAgfSI7fX19fX0=';
    }

    public function getSerializedMiddlewares(): string
    {
        return 'YToxOntpOjA7YToyOntzOjY6Im9iamVjdCI7TzoxNjoiT3Bpc1xDbG9zdXJlXEJveCI6Mjp7aTowO2k6MztpOjE7YToyOntpOjA7czozNDoiRGFya2VuXERlYnVnYmFyXERlYnVnQmFyTWlkZGxld2FyZSI7aToxO2E6MTp7czo4OiJkZWJ1Z0JhciI7TzoxNjoiT3Bpc1xDbG9zdXJlXEJveCI6Mjp7aTowO2k6MztpOjE7YToyOntpOjA7czoyNToiRGVidWdCYXJcU3RhbmRhcmREZWJ1Z0JhciI7aToxO2E6OTp7czoxMDoiY29sbGVjdG9ycyI7YTo2OntzOjM6InBocCI7TzoxNjoiT3Bpc1xDbG9zdXJlXEJveCI6Mjp7aTowO2k6MztpOjE7YToyOntpOjA7czozOToiRGVidWdCYXJcRGF0YUNvbGxlY3RvclxQaHBJbmZvQ29sbGVjdG9yIjtpOjE7YTo2OntzOjE2OiJ1c2VIdG1sVmFyRHVtcGVyIjtiOjA7czoxMjoiZGF0YUZvcm1hdGVyIjtOO3M6OToidmFyRHVtcGVyIjtOO3M6MTg6InhkZWJ1Z0xpbmtUZW1wbGF0ZSI7czowOiIiO3M6MTk6InhkZWJ1Z1Nob3VsZFVzZUFqYXgiO2I6MDtzOjE4OiJ4ZGVidWdSZXBsYWNlbWVudHMiO2E6MDp7fX19fXM6ODoibWVzc2FnZXMiO086MTY6Ik9waXNcQ2xvc3VyZVxCb3giOjI6e2k6MDtpOjM7aToxO2E6Mjp7aTowO3M6NDA6IkRlYnVnQmFyXERhdGFDb2xsZWN0b3JcTWVzc2FnZXNDb2xsZWN0b3IiO2k6MTthOjEwOntzOjQ6Im5hbWUiO3M6ODoibWVzc2FnZXMiO3M6ODoibWVzc2FnZXMiO2E6MDp7fXM6MTA6ImFnZ3JlZ2F0ZXMiO2E6MDp7fXM6MTE6ImNvbGxlY3RGaWxlIjtiOjA7czoxNjoidXNlSHRtbFZhckR1bXBlciI7YjowO3M6MTI6ImRhdGFGb3JtYXRlciI7TjtzOjk6InZhckR1bXBlciI7TjtzOjE4OiJ4ZGVidWdMaW5rVGVtcGxhdGUiO3M6MDoiIjtzOjE5OiJ4ZGVidWdTaG91bGRVc2VBamF4IjtiOjA7czoxODoieGRlYnVnUmVwbGFjZW1lbnRzIjthOjA6e319fX1zOjc6InJlcXVlc3QiO086MTY6Ik9waXNcQ2xvc3VyZVxCb3giOjI6e2k6MDtpOjM7aToxO2E6Mjp7aTowO3M6NDM6IkRlYnVnQmFyXERhdGFDb2xsZWN0b3JcUmVxdWVzdERhdGFDb2xsZWN0b3IiO2k6MTthOjY6e3M6MTY6InVzZUh0bWxWYXJEdW1wZXIiO2I6MDtzOjEyOiJkYXRhRm9ybWF0ZXIiO047czo5OiJ2YXJEdW1wZXIiO047czoxODoieGRlYnVnTGlua1RlbXBsYXRlIjtzOjA6IiI7czoxOToieGRlYnVnU2hvdWxkVXNlQWpheCI7YjowO3M6MTg6InhkZWJ1Z1JlcGxhY2VtZW50cyI7YTowOnt9fX19czo0OiJ0aW1lIjtPOjE2OiJPcGlzXENsb3N1cmVcQm94IjoyOntpOjA7aTozO2k6MTthOjI6e2k6MDtzOjQwOiJEZWJ1Z0JhclxEYXRhQ29sbGVjdG9yXFRpbWVEYXRhQ29sbGVjdG9yIjtpOjE7YToxMTp7czoxNjoicmVxdWVzdFN0YXJ0VGltZSI7ZDoxNzM1ODE0MTAwLjExNTY2NztzOjE0OiJyZXF1ZXN0RW5kVGltZSI7TjtzOjE1OiJzdGFydGVkTWVhc3VyZXMiO2E6MDp7fXM6ODoibWVhc3VyZXMiO2E6MDp7fXM6MTM6Im1lbW9yeU1lYXN1cmUiO2I6MDtzOjE2OiJ1c2VIdG1sVmFyRHVtcGVyIjtiOjA7czoxMjoiZGF0YUZvcm1hdGVyIjtOO3M6OToidmFyRHVtcGVyIjtOO3M6MTg6InhkZWJ1Z0xpbmtUZW1wbGF0ZSI7czowOiIiO3M6MTk6InhkZWJ1Z1Nob3VsZFVzZUFqYXgiO2I6MDtzOjE4OiJ4ZGVidWdSZXBsYWNlbWVudHMiO2E6MDp7fX19fXM6NjoibWVtb3J5IjtPOjE2OiJPcGlzXENsb3N1cmVcQm94IjoyOntpOjA7aTozO2k6MTthOjI6e2k6MDtzOjM4OiJEZWJ1Z0JhclxEYXRhQ29sbGVjdG9yXE1lbW9yeUNvbGxlY3RvciI7aToxO2E6MTE6e3M6OToicmVhbFVzYWdlIjtiOjA7czoxNToibWVtb3J5UmVhbFN0YXJ0IjtpOjA7czoxMToibWVtb3J5U3RhcnQiO2k6MDtzOjk6InBlYWtVc2FnZSI7aTowO3M6OToicHJlY2lzaW9uIjtpOjA7czoxNjoidXNlSHRtbFZhckR1bXBlciI7YjowO3M6MTI6ImRhdGFGb3JtYXRlciI7TjtzOjk6InZhckR1bXBlciI7TjtzOjE4OiJ4ZGVidWdMaW5rVGVtcGxhdGUiO3M6MDoiIjtzOjE5OiJ4ZGVidWdTaG91bGRVc2VBamF4IjtiOjA7czoxODoieGRlYnVnUmVwbGFjZW1lbnRzIjthOjA6e319fX1zOjEwOiJleGNlcHRpb25zIjtPOjE2OiJPcGlzXENsb3N1cmVcQm94IjoyOntpOjA7aTozO2k6MTthOjI6e2k6MDtzOjQyOiJEZWJ1Z0JhclxEYXRhQ29sbGVjdG9yXEV4Y2VwdGlvbnNDb2xsZWN0b3IiO2k6MTthOjg6e3M6MTA6ImV4Y2VwdGlvbnMiO2E6MDp7fXM6MTU6ImNoYWluRXhjZXB0aW9ucyI7YjowO3M6MTY6InVzZUh0bWxWYXJEdW1wZXIiO2I6MDtzOjEyOiJkYXRhRm9ybWF0ZXIiO047czo5OiJ2YXJEdW1wZXIiO047czoxODoieGRlYnVnTGlua1RlbXBsYXRlIjtzOjA6IiI7czoxOToieGRlYnVnU2hvdWxkVXNlQWpheCI7YjowO3M6MTg6InhkZWJ1Z1JlcGxhY2VtZW50cyI7YTowOnt9fX19fXM6NDoiZGF0YSI7TjtzOjEwOiJqc1JlbmRlcmVyIjtOO3M6MTg6InJlcXVlc3RJZEdlbmVyYXRvciI7TjtzOjk6InJlcXVlc3RJZCI7TjtzOjc6InN0b3JhZ2UiO047czoxMDoiaHR0cERyaXZlciI7TjtzOjIxOiJzdGFja1Nlc3Npb25OYW1lc3BhY2UiO3M6MjI6IlBIUERFQlVHQkFSX1NUQUNLX0RBVEEiO3M6Mjg6InN0YWNrQWx3YXlzVXNlU2Vzc2lvblN0b3JhZ2UiO2I6MDt9fX19fX1zOjg6InBvc2l0aW9uIjtFOjM2OiJEYXJrZW5cRW51bVxNaWRkbGV3YXJlUG9zaXRpb246QUZURVIiO319';
    }
}